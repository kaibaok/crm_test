<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;

class ProductController extends Controller {

    public function index()
    {
        $title = "Danh sách sản phẩm";
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