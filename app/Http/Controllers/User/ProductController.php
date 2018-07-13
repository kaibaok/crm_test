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

    function leftMenu(){
        $mTag         = Tag::where(array("status" => 1))->orderByRaw("id DESC")->get();
        $mBrand       = Brand::where(array("status" => 1))->orderByRaw("id DESC")->get();
        $mProductType = ProductType::orderByRaw("id DESC")->get();
        $mProductCate = ProductCategory::where(array("status" => 1))->orderByRaw("id DESC")->get();
        View::share('mTag', $mTag);
        View::share('mBrand', $mBrand);
        View::share('mProductType', $mProductType);
        View::share('mProductCate', $mProductCate);
    }
    public function index()
    {
        $title = "Danh sách sản phẩm";
        self::leftMenu();

        return view("user.product.index")
            ->with("title", $title);
    }

    public function detail()
    {
        $title = "Chi tiết sản phẩm";
        return view("user.product.detail")
            ->with("title", $title);
    }
}