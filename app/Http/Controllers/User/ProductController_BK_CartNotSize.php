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

    public function detail($id, $seo_link)
    {
        MetaTag::set('title', 'chi tiết  sản phẩm');
        MetaTag::set('description', 'danh sách sản phẩm');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        $product = Product::getProductByConditions(array("product" => $id))->first();
        if(empty($product)) return redirect()->guest("/p");
        return view("user.product.detail")
            ->with("product", $product);
            // ->with("listSize", $this->getOption("listSize"));
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

    public function addCart(Request $request)
    {
        $params = $request->all();
        if(!empty($params)) {
            $productID = (int) $params['productID'];
            $number    = (int) $params['number'];
            $product   = Product::getProductByConditions(array("product" => $productID))->first();
            $sCart     = null;
            if(!empty($product)) {
                $data = array(
                    "productID"  => $productID,
                    "number"     => $number,
                    "title"      => $product->title,
                    "seo_link"   => $product->seo_link,
                    "short_desc" => $product->short_desc,
                    "price"      => ($product->discount < $product->price) ? $product->discount : $product->price,
                    "dprice"     => $product->price,
                    "img"        => URL_IMG."product/".$product->pimg_list
                );

                if(Session::has('sCart')) {
                    $sCart  = Session::get('sCart');
                    $status = false;

                    foreach ($sCart as $key => $value) {
                        if(isset($value['productID']) && $value['productID'] == $productID) {
                            $sCart[$key]['number'] += $number;
                            $status = true;
                        }
                    }
                    if(!$status) $sCart[] = $data;
                } else {
                    $sCart = array($data);
                }
                Session::put('sCart', $sCart);
            }
        }
        return response()->json($sCart);
    }

    public function cart(Request $request)
    {
        MetaTag::set('title', 'Giỏ hàng');
        MetaTag::set('description', 'Giỏ hàng');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        $sCart  = Session::get('sCart');
        $params = $request->all();
        $errors = $discountPrice = null;

        if(Session::has('discountPriceCode')) {
            $discountPriceCode = Session::get('discountPriceCode');
            $discountPrice   = DiscountCode::where("code", $discountPriceCode)
                ->where("number", ">", 0)
                ->get()
                ->first();
        }

        if($request->isMethod('post')) {
            foreach ($sCart as $key => $value) {
                if(isset($params['number'][$value['productID']])) {
                    $number = (int) $params['number'][$value['productID']];
                    if($number < 0) unset($sCart[$key]);
                    else $sCart[$key]['number'] = $number;
                }
            }

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

            Session::put('sCart', $sCart);
        }
        return view("user.product.cart")
            ->with("sCart", $sCart)
            ->with("discountPrice", $discountPrice)
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

        if($request->isMethod('post')) {
            $info = $request->all();
            if(empty($info['full_name'])) $errors['full_name'] = "Vui lòng kiểm tra họ tên";
            if(!empty($info['email']) && !filter_var($info['email'], FILTER_VALIDATE_EMAIL)) {
                $errors['email']       = "Vui lòng kiểm tra format email";
            }
            if(empty($info['phone'])) $errors['phone']       = "Vui lòng kiểm tra số điện thoại";
            if(empty($info['address1'])) $errors['address']  = "Vui lòng kiểm tra địa chỉ";
            if(empty($info['city'])) $errors['city']         = "Vui lòng kiểm tra thành phố";
            if(empty($info['stage'])) $errors['stage']       = "Vui lòng kiểm tra phường/xã";
            if(empty($info['district'])) $errors['district'] = "Vui lòng kiểm tra quận";
            if(empty($errors)) {
                // luu data
                $info['code'] = $info['userid'] = 0;
                if (Auth::check()) {
                    $user   = Auth::user();
                    $info['userid'] = $user->id;
                }

                if(Session::has('discountPriceCode')) {
                    $discountPriceCode = Session::get('discountPriceCode');
                    $info['code']      = $discountPriceCode;
                }

                $status = Cart::addCart($info);
                if($status) {
                    $cartID = $status->id;
                    foreach ($sCart as $key => $value) {
                        $data  = array(
                            "product_id" => $value['productID'],
                            "cart_id"    => $cartID,
                            "name"       => $value['title'],
                            "number"     => $value['number'],
                            "price"      => $value['price'],
                            "dprice"     => $value['dprice'],
                        );
                        $addCartDetail = CartDetail::addCartDetail($data);
                        if($addCartDetail && !empty($discountPrice)) {
                            $discountPrice->number = $discountPrice->number - 1;
                            $discountPrice->save();
                        }

                    }
                    //send email

                    // $send = Mail::send('mails.cartmail',
                    //     array(
                    //         'name'=> "Kai",
                    //         'email'=> "tamvo@vinaresearch.net",
                    //         'content'=> "content asdasd"
                    //     ),
                    //     function($message){
                    //         $message->to('tamvo@vinaresearch.net', 'Visitor')->subject('Visitor Feedback!');
                    // });

                    // dd($send);

                    Session::forget('discountPriceCode');
                    Session::forget('sCart');
                    // Session::flash('flash_message', 'Send message successfully!');

                }
                // hoan tat gio hang
                return redirect()->guest("/hoan-tat-don-hang");
            }
        }

        return view("user.product.checkout")
            ->with("sCart", $sCart)
            ->with("info", $info)
            ->with("errors", $errors)
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