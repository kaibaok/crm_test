<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\Tag;
use App\Models\Brand;
use App\Helpers\Utils;
use MetaTag;
use Session;

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
            ->with("product", $product)
            ->with("listSize", $this->getOption("listSize"));
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

    public function cart()
    {
        MetaTag::set('title', 'Giỏ hàng');
        MetaTag::set('description', 'Giỏ hàng');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        return view("user.product.cart");
    }

    public function checkout()
    {
        MetaTag::set('title', 'Xác nhận đơn hàng');
        MetaTag::set('description', 'Xác nhận đơn hàng');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        return view("user.product.checkout");
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
                    "price"      => ($product->discount) ? $product->discount : $product->price,
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
}