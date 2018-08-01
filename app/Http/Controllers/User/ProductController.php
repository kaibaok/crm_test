<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\Tag;
use App\Models\Brand;
use App\Models\DiscountCode;
use App\Models\Cart;
use App\Models\CartDetail;
use App\Helpers\Utils;
use MetaTag;
use Session;
use Mail;

class ProductController extends Controller {

    function leftMenu($request){
        // mTag = menu Tag
        $cateID       = isset($request->category) ? (int) $request->category : '';
        $typeID       = isset($request->type) ? (int) $request->type : '';
        $brandID      = isset($request->brand) ? (int) $request->brand : '';
        $size         = isset($request->size) ? $request->size : '';
        $mTag         = Tag::where(array("status" => 1))->orderByRaw("id DESC")->get();
        $mBrand       = Brand::where(array("status" => 1))->orderByRaw("id DESC")->get();
        $mProductType = ProductType::orderByRaw("id DESC")->get();
        $mProductCate = ProductCategory::where(array("status" => 1))->orderByRaw("id DESC")->get();

        View::share('mTag', $mTag);
        View::share('mBrand', $mBrand);
        View::share('mProductType', $mProductType);
        View::share('mProductCate', $mProductCate);
        View::share('cateID', $cateID);
        View::share('typeID', $typeID);
        View::share('brandID', $brandID);
        View::share('size', $size);
    }
    public function index(Request $request)
    {
        MetaTag::set('title', 'Danh sách sản phẩm');
        MetaTag::set('description', 'danh sách sản phẩm');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');
        $title = "Danh sách sản phẩm";
        self::leftMenu($request);

        $params = $request->all();
        $builder = Product::getProductByConditions($params);
        $totalResult   = $builder->count();
        $listProduct   = $builder->paginate(LIMIT_PAGE_PRODUCT);
        $paginator = $listProduct->appends($params);
        return view("user.product.index")
            ->with("listProduct", $listProduct)
            ->with("paginator", $paginator);
    }

    public function detail(Request $request, $id, $seo_link)
    {
        MetaTag::set('title', 'chi tiết  sản phẩm');
        MetaTag::set('description', 'danh sách sản phẩm');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        $product = Product::getProductByConditions(array("product" => $id))->first();


        if(empty($product)) return redirect()->guest("/p");

        $params = $request->all();
        if($request->isMethod('post')) {
            $number  = (int) $params['number'];
            $size    = strip_tags($params['size']);
            $color   = (int) $params['color'];
            $product = Product::getProductByConditions(array("product" => $id))->first();
            $sCart   = Session::get('sCart');
            if(!empty($product)) {
                $idCart = $id."_".$size."_".$color;
                $data = array(
                    "id"       => $id,
                    "number"   => $number,
                    "title"    => $product->title,
                    "seo_link" => $product->seo_link,
                    "size"     => $size,
                    "color"    => $color,
                    "img"      => URL_IMG."product/".$product->pimg_list
                );

                if(empty($sCart)) $sCart = array($idCart => $data);
                else {
                    $status = false;
                    foreach ($sCart as $key => $value) {
                        if($key == $idCart) {
                            $sCart[$idCart]['number'] += $number;
                            $status = true;
                        }
                    }
                    if(!$status) $sCart[$idCart] = $data;
                }
            }
            Session::put('sCart', $sCart);
            return redirect()->guest("/gio-hang");
        }

        return view("user.product.detail")
            ->with("product", $product)
            ->with("listSize", $this->getOption("listSize"))
            ->with("id", $id);
    }

    public function brand(Request $request)
    {
        MetaTag::set('title', 'Danh sách thương hiệu');
        MetaTag::set('description', 'danh sách thương hiệu');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');
        self::leftMenu($request);
        $listBrand = Brand::where("status", 1)->get();
        return view("user.product.brand")
            ->with("listBrand", $listBrand);
    }

    public function cart(Request $request)
    {
        MetaTag::set('title', 'Giỏ hàng');
        MetaTag::set('description', 'Giỏ hàng');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        $sCart  = Session::get("sCart");
        $params = $request->all();
        $errors = $discountPrice = $listProduct = null;

        if(Session::has('discountPriceCode')) {
            $discountPriceCode = Session::get('discountPriceCode');
            $discountPrice   = DiscountCode::where("code", $discountPriceCode)
                ->where("number", ">", 0)
                ->get()
                ->first();
        }

        if(!empty($sCart)) {
            $listID = null;
            foreach ($sCart as $key => $value) {
                $listID[] = $value['id'];
            }
            $listProduct = Product::getListByIds($listID);
        }

        if($request->isMethod('post')) {
            if(isset($params['btnRemoveCode'])) {
                $discountPrice = null;
                Session::forget('discountPriceCode');
            } else {
                if(!empty($params['discountCode'])) {
                    $discountPrice = DiscountCode::where("code", $params['discountCode'])
                        ->where("number", ">", 0)
                        ->get()
                        ->first();
                    if(!empty($discountPrice)) {
                        $errors['success'] = "Bạn đã áp dụng mã thành công";
                        Session::put('discountPriceCode', $discountPrice->code);
                    } else {
                        $errors['fail'] = "Mã của bạn đã hết hạng hoặc sai mã. Bạn kiểm tra lại nhé!!!";
                        Session::forget('discountPriceCode');
                    }
                }
            }
        }

        return view("user.product.cart")
            ->with("sCart", $sCart)
            ->with("discountPrice", $discountPrice)
            ->with("listProduct", $listProduct)
            ->with("errors", $errors);

    }

    public function checkout(Request $request)
    {
        MetaTag::set('title', 'Xác nhận đơn hàng');
        MetaTag::set('description', 'Xác nhận đơn hàng');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        if(!Session::has('sCart')) return redirect()->guest("/p");

        $sCart  = Session::get('sCart');
        $errors = $info = $discountPrice = null;

        if(Session::has('discountPriceCode')) {
            $discountPriceCode = Session::get('discountPriceCode');
            $discountPrice     = DiscountCode::where("code", $discountPriceCode)
                ->where("number", ">", 0)
                ->get()
                ->first();
        }

        if(!empty($sCart)) {
            $listID = null;
            foreach ($sCart as $key => $value)
                $listID[] = $value['id'];
            $listProduct = Product::getListByIds($listID);
        }

        if($request->isMethod('post')) {
            $info = $request->all();
            if(empty($info['full_name'])) $errors['full_name'] = "Vui lòng kiểm tra họ tên";
            if(!empty($info['email']) && !filter_var($info['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email']       = "Vui lòng kiểm tra format email";
            }
            if(empty($info['phone'])) $errors['phone']       = "Vui lòng kiểm tra số điện thoại";
            if(empty($info['address1'])) $errors['address']  = "Vui lòng kiểm tra địa chỉ";
            if(empty($info['city'])) $errors['city']         = "Vui lòng kiểm tra thành phố";
            if(empty($info['district'])) $errors['district'] = "Vui lòng kiểm tra quận";
            if(empty($errors)) {
                // luu data
                $info['code'] = $info['userid'] = 0;
                if (Auth::check()) {
                    $user   = Auth::user();
                    $info['userid'] = $user->id;
                }

                if(!empty($discountPrice)) $info['code'] = $discountPrice->code;

                $status = Cart::addCart($info);


                if($status) {
                    $cartID = $status->id;
                    foreach ($sCart as $key => $value) {
                        $data  = array(
                            "product_id" => $value['id'],
                            "cart_id"    => $cartID,
                            "name"       => $value['title'],
                            "number"     => $value['number'],
                            "color"      => $value['color'],
                            "price"      => $listProduct[$value['id']]['price'],
                            "dprice"     => $listProduct[$value['id']]['discount'],
                        );
                        $addCartDetail = CartDetail::addCartDetail($data);
                        if($addCartDetail && !empty($discountPrice)) {
                            $discountPrice->number = $discountPrice->number - 1;
                            $discountPrice->save();
                        }
                    }
                    Session::forget('discountPriceCode');
                    Session::forget('sCart');
                }
                // hoan tat gio hang
                return redirect()->guest("/hoan-tat-don-hang");
            }
        }

        return view("user.product.checkout")
            ->with("sCart", $sCart)
            ->with("info", $info)
            ->with("errors", $errors)
            ->with("listProduct", $listProduct)
            ->with("discountPrice", $discountPrice);
    }

    public function orderCart()
    {
        MetaTag::set('title', 'Hoàn tất đơn hàng');
        MetaTag::set('description', 'Hoàn tất đơn hàng');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');
        return view("user.product.orderCart");
    }


}