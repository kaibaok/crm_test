<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\ProductType;
use App\Events\Img;
use DateTime,Session;
use App\User;

use App\Models\Admin\Cart;

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
            $params = $_POST;
            $cls_img = new Img();
            $result = $cls_img->uploadImages();

            foreach ($_FILES as $key => $value) {
                $params[$key] = $result[$key];
            }

            $s_new_product = Product::addProduct($params);
            if($s_new_product) {
                $_POST   = empty($_POST);
                $errors  = "Thêm thành công";
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

    public function editProduct($id){
        $cls_img       = new Img();
        $title         = "Sửa sản phẩm";
        $errors        = NULL;
        $list_category = ProductCategory::getList();
        $list_type     = ProductType::getList();
        $get_product   = Product::findOrFail((int)$id);
        if(!empty($_POST)){
            $params = $_POST;
            $result = $cls_img->uploadImages();
            foreach ($_FILES as $key => $value) {
                if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                    $params[$key] = $result[$key];
                    $cls_img->removeImages($get_product[$key]);
                }
                else {
                    if(empty($params[$key."_url"])) $cls_img->removeImages($get_product[$key]);
                    $params[$key] = $params[$key."_url"];
                }
            }
            $errors = Product::editProduct($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        // reload data again
        $get_product   = Product::findOrFail((int)$id);
        return view("admin.product.editProduct")->with("view",array("title" => $title ,
            "product"       => $get_product,
            "list_category" => $list_category,
            "list_type"     => $list_type,
            "errors"        => $errors));
    }

    public function delProduct($id){
        Product::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
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
		$list_status   = $this->getOption('listStatus');
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
        $list_status   = $this->getOption('listStatus');
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
    // end typeproduct

    // search Product
    public function ajaxSearchProduct(){
        $list_product = NULL;
        if(!empty($_POST)){
            $txt_search    = htmlspecialchars(trim(strip_tags($_POST['txt_search'])));
            $list_product  = Product::searchOption($txt_search);
            $list_category = ProductCategory::getList();
            $list_type     = ProductType::getList();
        }
        return view("admin.product.ajaxListProduct")->with("view",array(
            "list_product"  => $list_product,
            "list_category" => $list_category,
            "list_type"     => $list_type));
    }

    public function statusProduct($id){
        $get_product = Product::findOrFail((int)$id);
        if(!empty($get_product)){
            if($get_product->status)
                $get_product->status = 0;
            else
                $get_product->status = 1;
        }
        echo $get_product->save();
        die;
    }

    public function statusCateProduct($id){
        $get_cproduct = ProductCategory::findOrFail((int)$id);
        if(!empty($get_cproduct)){
            if($get_cproduct->status)
                $get_cproduct->status = 0;
            else
                $get_cproduct->status = 1;
        }
        echo $get_cproduct->save();
        die;
    }

    //  crod Cart Product
    public function listCart (){
        $title     = "Danh Sách Đặt Hàng";
        $m_cart = new Cart();
        if(isset($_GET) && !empty($_GET)){
            if(isset($_GET['userid']) && !empty($_GET['userid'])) $m_cart = $m_cart->where('userid','like',"%{$_GET['userid']}%");
            if(isset($_GET['name']) && !empty($_GET['name'])) $m_cart = $m_cart->where('name','like',"%{$_GET['name']}%");
            if(isset($_GET['email']) && !empty($_GET['email'])) $m_cart = $m_cart->where('email','like',"%{$_GET['email']}%");
            if(isset($_GET['address']) && !empty($_GET['address'])) $m_cart = $m_cart->where('address','like',"%{$_GET['address']}%");
            if(isset($_GET['registered_date']) && !empty($_GET['registered_date'])) $m_cart = $m_cart->where('registered_date','like',"%{$_GET['registered_date']}%");
            if(isset($_GET['ship_date']) && !empty($_GET['ship_date'])) $m_cart = $m_cart->where('ship_date','like',"%{$_GET['ship_date']}%");
            if(isset($_GET['paid']) && !empty($_GET['paid'])) $m_cart = $m_cart->where('paid','=',$_GET['paid']);
            if(isset($_GET['type']) && !empty($_GET['type'])) $m_cart = $m_cart->where('userid','!=',"");
        }
        $list_cart     = $m_cart->paginate(20);
        $list_type = $this->getOption('typePaid');
        $list_paid = $this->getOption('listPaid');
        return view("admin.product.listCart")->with("view",array(
            "title"         => $title,
            "list_cart"     => $list_cart,
            "list_type"     => $list_type,
            "list_paid"     => $list_paid,
        ));
    }

    public function addCart(){
        $title         = "Thêm đơn hàng";
        $errors        = NULL;
        $list_status   = $this->getOption('listStatus');
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
}
