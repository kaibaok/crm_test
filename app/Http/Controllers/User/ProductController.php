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
        $title = "Danh sách sản phẩm";
        self::leftMenu($request);

        $params = $request->all();
        $builder = Product::getProductByConditions($params);
        $totalResult   = $builder->count();
        $listProduct   = $builder->paginate(LIMIT_PAGE_PRODUCT);
        $paginator = $listProduct->appends($params);
        return view("user.product.index")
            ->with("listProduct", $listProduct)
            ->with("title", $title)
            ->with("paginator", $paginator);
    }

    public function detail($id, $seo_link)
    {
        $title = "Chi tiết sản phẩm";
        $product = Product::getProductByConditions(array("product" => $id))->first();
        if(empty($product)) return redirect()->guest("/p");
        return view("user.product.detail")
            ->with("product", $product)
            ->with("listSize", $this->getOption("listSize"))
            ->with("title", $title);
    }
}