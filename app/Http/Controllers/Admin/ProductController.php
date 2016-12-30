<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\ProductType;

class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listProduct (){
		$title         = "Danh Sách Sản Phẩm";
		$list_product  = Product::paginate(20);
		$list_category = ProductCategory::getList();
		$list_type     = ProductType::getList();
		return view("admin.product.listProduct")->with("view",array(
				"title"         => $title,
				"list_product"  =>$list_product,
				"list_category" =>$list_category,
				"list_type"     =>$list_type,));
	}

	 //  crod Product
    public function addProduct(){
		$title         = "Thêm mới sản phẩm";
		$errors        = NULL;
		$list_category = ProductCategory::getList();
		$list_type     = ProductType::getList();
        if(!empty($_POST)){
            $s_new_product = Product::addProduct($_POST);
            if($s_new_Product) {
                $_POST  = empty($_POST);
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addProduct")->with("view",array(
        	"title" => $title,
            "list_category" =>$list_category,
			"list_type"     =>$list_type,
            "errors"          => $errors));
    }



}
