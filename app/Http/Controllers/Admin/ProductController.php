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

    //  crod Product
	public function listProduct (){
		$title         = "Danh Sách Sản Phẩm";
		$list_product  = Product::paginate(20);
		$list_category = ProductCategory::getList();
		$list_type     = ProductType::getList();
		return view("admin.product.listProduct")->with("view",array(
            "title"         => $title,
            "list_product"  => $list_product,
            "list_category" => $list_category,
            "list_type"     => $list_type,));
	}

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
            "title"         => $title,
            "list_category" => $list_category,
            "list_type"     => $list_type,
            "errors"        => $errors));
    }

    //  crod CateProduct
    public function listCateProduct(){
		$title         = "Danh Sách Loại Sản Phẩm";
		$list_category  = ProductCategory::orderBy('id','DESC')->paginate(20);
		return view("admin.product.listCateProduct")->with("view",array(
				"title"         => $title,
				"list_category" =>$list_category,
			));
	}

    public function addCateProduct(){
		$title         = "Thêm mới loại sản phẩm";
		$errors        = NULL;
		$list_status   = $this->listStatus();
        if(!empty($_POST)){
            $s_new_cateproduct = ProductCategory::addCateProduct($_POST);
            if($s_new_cateproduct) {
                $_POST  = empty($_POST);
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addCateProduct")->with("view",array(
        	"title" => $title,
			"errors"        => $errors));
    }

     public function editCateProduct($id){
        $title  = "Sửa loại sản phẩm";
        $errors = NULL;
        if(!empty($_POST)){
            $errors = ProductCategory::editCateProduct($_POST);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        $get_cate = ProductCategory::findOrFail((int)$id);
        return view("admin.product.editCateProduct")->with("view",array("title" => $title ,
            "category" => $get_cate,
            "errors"   => $errors));
    }

    public function delCateProduct($id){
        ProductCategory::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    //  crod TypeProduct
    public function listTypeProduct(){
        $title     = "Danh sách trọng lượng sản phẩm";
        $list_type = ProductType::orderBy('id','DESC')->paginate(20);
        return view("admin.product.listTypeProduct")->with("view",array(
                "title"     => $title,
                "list_type" => $list_type,
            ));
    }

    public function addTypeProduct(){
        $title         = "Thêm mới trọng lượng sản phẩm";
        $errors        = NULL;
        $list_status   = $this->listStatus();
        if(!empty($_POST)){
            $s_new_typeproduct = ProductType::addTypeProduct($_POST);
            if($s_new_typeproduct) {
                $_POST  = empty($_POST);
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addTypeProduct")->with("view",array(
            "title" => $title,
            "errors"        => $errors));
    }

     public function editTypeProduct($id){
        $title  = "Sửa trọng lượng sản phẩm";
        $errors = NULL;
        if(!empty($_POST)){
            $errors = ProductType::editTypeProduct($_POST);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        $get_type = ProductType::findOrFail((int)$id);
        return view("admin.product.editTypeProduct")->with("view",array("title" => $title ,
            "type" => $get_type,
            "errors"   => $errors));
    }

    public function delTypeProduct($id){
        ProductType::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

}
