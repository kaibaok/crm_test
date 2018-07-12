<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\Tag;


class ProductController extends Controller {

    function leftMenu(){
        $listTag = Tag::where(array("status" => 1))->orderByRaw("id DESC")->get();
        View::share('listTag', $listTag);
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