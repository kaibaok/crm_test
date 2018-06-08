<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Colors;
use App\Models\Admin\Product;
use App\Models\Admin\ProductCategory;
use App\Models\Admin\ProductType;
use App\Models\Admin\ProductItem;
use App\Events\Img;
use DateTime,Session;
use App\User;
use App\Models\Admin\Cart;

class ProductController extends Controller
{
    const LIMIT_PAGE   = 5;

    //  crod Colors
    public function listColors(){
        $title      = "Danh Sách Màu";
        $listColors = Colors::paginate(self::LIMIT_PAGE);
        return view("admin.product.listColors")
            ->with("title", $title)
            ->with("listColors", $listColors);
    }

    public function addColors(Request $request){
        $title  = "Thêm mới màu";
        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            $s_new_colors = Colors::addColors($params);
            if($s_new_colors) {
                $params = null;
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addColors")
            ->with("title", $title)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editColors(Request $request){
        $title     = "Sửa sản phẩm";
        $id        = (int) $request->route('id');
        $cls_img   = new Img();
        $errors    = NULL;
        $params    = $request->all();
        $getColors = Colors::findOrFail((int)$id);
        if ($request->isMethod('post')) {
            $errors = Colors::editColors($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        // reload data again
        $getColors = Colors::findOrFail((int)$id);
        return view("admin.product.editColors")
            ->with("title", $title)
            ->with("colors", $getColors)
            ->with("errors", $errors);
    }

    public function delColors($id){
        Colors::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    //  crod Product
	public function listProduct(Request $request){
        $title        = "Danh Sách Sản Phẩm";
        $page         = isset($request->page) ? $request->page : 1;
        $builder      = Product::select();
        $txtSearch    = isset($request->txtSearch) ? $request->txtSearch : '';
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();

        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%")
                ->orWhere('code_id','like',"%{$txtSearch}%");
        }

        $builder->orderByRaw("ord ASC, id DESC");
        $totalResult = $builder->count();
        $listProduct = $builder->paginate(self::LIMIT_PAGE);

        $conditionPage = array(
            'txtSearch' => $txtSearch
        );

		return view("admin.product.listProduct")
            ->with("title", $title)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("listProduct", $listProduct)
            ->with("conditionPage", $conditionPage);
	}

    public function addProduct(Request $request){
        $title        = "Thêm mới sản phẩm";
        $errors       = NULL;
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();
        $params       = $request->all();
        if ($request->isMethod('post')) {
            $clsImg = new Img();
            $result = $clsImg->uploadImages();
            foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
            $s_new_product = Product::addProduct($params);
            if($s_new_product) {
                $params = array();
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }

        return view("admin.product.addProduct")
            ->with("title", $title)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editProduct(Request $request){
        $title        = "Sửa sản phẩm";
        $id           = (int) $request->route('id');
        $cls_img      = new Img();
        $errors       = NULL;
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();
        $getProduct   = Product::findOrFail((int)$id);
        $params       = $request->all();
        if ($request->isMethod('post')) {
            $result = $cls_img->uploadImages();
            foreach ($_FILES as $key => $value) {
                if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                    $params[$key] = $result[$key];
                    $cls_img->removeImages($getProduct[$key]);
                }
                else {
                    if(empty($params[$key."_url"])) $cls_img->removeImages($getProduct[$key]);
                    $params[$key] = $params[$key."_url"];
                }
            }
            $errors = Product::editProduct($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
         }
        // reload data again
        $getProduct   = Product::findOrFail((int)$id);
        return view("admin.product.editProduct")
            ->with("title" , $title )
            ->with("product", $getProduct)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("errors", $errors);
    }

    public function delProduct($id){
        Product::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    //  crod CateProduct
    public function listCateProduct(){
        $title        = "Danh Sách Loại Sản Phẩm";
        $listItem     = ProductItem::getList();
        $listCategory = ProductCategory::orderBy('id','DESC')
            ->paginate(self::LIMIT_PAGE);
		return view("admin.product.listCateProduct")
			->with("title", $title)
            ->with("listItem", $listItem)
			->with("listCategory", $listCategory);
	}

    public function addCateProduct(Request $request){
        $title      = "Thêm mới loại sản phẩm";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $listItem   = ProductItem::getList();
        $params     = $request->all();
        if ($request->isMethod('post')) {
            $s_new_cateproduct = ProductCategory::addCateProduct($params);
            if($s_new_cateproduct) {
                $params  = null;
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addCateProduct")
        	->with("title", $title)
			->with("errors", $errors)
            ->with("params", $params)
            ->with("listItem", $listItem);
    }

    public function editCateProduct(Request $request){
        $title  = "Sửa loại sản phẩm";
        $id     = (int) $request->route('id');
        $errors = NULL;
        $params = $request->all();
        $listItem   = ProductItem::getList();
        if ($request->isMethod('post')) {
            $errors = ProductCategory::editCateProduct($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        $getCate = ProductCategory::findOrFail((int)$id);
        return view("admin.product.editCateProduct")
            ->with("title", $title)
            ->with("category", $getCate)
            ->with("errors"  , $errors)
            ->with("listItem"  , $listItem);
    }

    public function delCateProduct($id){
        ProductCategory::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    //  crod TypeProduct
    public function listTypeProduct(){
        $title    = "Danh sách thể loại sản phẩm";
        $listType = ProductType::orderBy('id','DESC')->paginate(self::LIMIT_PAGE);
        return view("admin.product.listTypeProduct")
            ->with("title", $title)
            ->with("listType", $listType);
    }

    public function addTypeProduct(Request $request){
        $title  = "Thêm mới thể loại sản phẩm";
        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            $s_new_typeproduct = ProductType::addTypeProduct($params);
            if($s_new_typeproduct) {
                $params = null;
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addTypeProduct")
            ->with("title", $title)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editTypeProduct(Request $request){
        $title  = "Sửa thể loại sản phẩm";
        $errors = NULL;
        $params = $request->all();
        $id     = (int) $request->route('id');
        if ($request->isMethod('post')) {
            $errors = ProductType::editTypeProduct($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        $getType = ProductType::findOrFail((int)$id);
        return view("admin.product.editTypeProduct")
            ->with("title", $title)
            ->with("type", $getType)
            ->with("errors", $errors);
    }

    public function delTypeProduct($id){
        ProductType::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
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

    public function statusItemProduct($id){
        $getItemroduct = ProductItem::findOrFail((int)$id);
        if(!empty($getItemroduct)){
            if($getItemroduct->status)
                $getItemroduct->status = 0;
            else
                $getItemroduct->status = 1;
        }
        echo $getItemroduct->save();
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
        if(!empty($_GET)){
            if(!empty($_GET['userid'])) $m_cart  = $m_cart->where('userid','like',"%{$_GET['userid']}%");
            if(!empty($_GET['name'])) $m_cart    = $m_cart->where('name','like',"%{$_GET['name']}%");
            if(!empty($_GET['email'])) $m_cart   = $m_cart->where('email','like',"%{$_GET['email']}%");
            if(!empty($_GET['address'])) $m_cart = $m_cart->where('address','like',"%{$_GET['address']}%");
            if(!empty($_GET['phone'])) $m_cart   = $m_cart->where('phone','like',"%{$_GET['phone']}%");
            if(!empty($_GET['paid'])) {
                $paid      = ($_GET['paid'] == "all" || $_GET['paid'] == "") ? "" : $_GET['paid'] ;
                $m_cart    = $m_cart->where('paid','like',"%{$paid}%");
            }
            if(!empty($_GET['type'])) {
                $type      = ($_GET['type'] == "all" || $_GET['type'] == "") ? "" : $_GET['type'] ;
                $m_cart    = $m_cart->where('type','like',"%{$type}%");
            }
            if(!empty($_GET['cb_dat']) &&!empty($_GET['registered_date'])) $m_cart = $m_cart->where('registered_date','like',"%{$_GET['registered_date']}%");
            if(!empty($_GET['cb_ship']) && !empty($_GET['ship_date'])) $m_cart = $m_cart->where('ship_date','like',"%{$_GET['ship_date']}%");
        }
        $list_cart = $m_cart->paginate(self::LIMIT_PAGE);
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
        if(!empty($_POST)){

        //     $s_new_typeproduct = ProductType::addTypeProduct($_POST);
        //     if($s_new_typeproduct) {
        //         $_POST  = empty($_POST);
        //         $errors = "Thêm thành công";
        //     }else{
        //         $errors = "Thêm thất bại";
        //     }
        }
        return view("admin.product.addCart")->with("view",array(
            "title" => $title,
            "errors"        => $errors));
    }


    //  crod ProductItem
    public function listItemProduct(){
        $title    = "Danh sách mục sản phẩm";
        $listItem = ProductItem::orderBy('id','DESC')->paginate(self::LIMIT_PAGE);
        return view("admin.product.listItemProduct")
            ->with("title", $title)
            ->with("listItem", $listItem);
    }

    public function addItemProduct(Request $request){
        $title      = "Thêm mới danh mục sản phẩm";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $listItem   = ProductItem::getList();
        $params     = $request->all();
        if ($request->isMethod('post')) {
            $newItemProduct = ProductItem::addItemProduct($params);
            if($newItemProduct) {
                $params  = null;
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.product.addItemProduct")
        	->with("title", $title)
			->with("errors", $errors)
            ->with("params", $params)
            ->with("listItem", $listItem);
    }

    public function editItemProduct(Request $request){
        $title  = "Sửa danh mục sản phẩm";
        $id     = (int) $request->route('id');
        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            $errors = ProductItem::editItemProduct($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        $getItem = ProductItem::findOrFail((int)$id);
        return view("admin.product.editItemProduct")
            ->with("title", $title)
            ->with("item", $getItem)
            ->with("errors"  , $errors);
    }

    public function delItemProduct($id){
        ProductItem::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function sortProduct(Request $request){
        $title        = "Sắp Xếp Sản Phẩm";
        $page         = isset($request->page) ? $request->page : 1;
        $builder      = Product::select();
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();

        $builder->orderByRaw("ord ASC, id DESC");
        $totalResult = $builder->count();
        $listProduct = $builder->paginate(self::LIMIT_PAGE);

        return view("admin.product.sortProduct")
            ->with("title", $title)
            ->with("page", $page)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("listProduct", $listProduct);
    }

    public function ajaxSortProduct(Request $request){
        $params = $request->all();
        if(!empty($params)) {
            parse_str($params['data'],$data);
            $page      = (int) $params['page'];
            $limitPage = self::LIMIT_PAGE;
            $offset    = $limitPage * ($page - 1);
            $listProduct = Product::orderByRaw("ord ASC, id DESC")->get();
            foreach ($listProduct as $key => $value) {
                $product = Product::find($value->id);
                $product->ord = $key+1;
                $product->save();
            }

            foreach ($data['item'] as $key => $value) {
                $key += $offset;
                $product = Product::find($value);
                $product->ord = $key;
                $product->save();
            }
        }

        return response()->json(array("status" => true));
    }
}
