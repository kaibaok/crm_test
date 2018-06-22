<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Colors;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Models\Brand;
use App\Models\ProductType;
use App\Models\ProductItem;
use App\Events\Img;
use DateTime,Session;
use App\User;
use App\Models\Admin\Cart;

class ProductController extends Controller
{
    //  crod Colors
    public function listColors(Request $request){
        $title      = "Danh Sách Màu";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = Colors::select();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) {
            $builder->where('name','like',"%{$txtSearch}%");
        }
        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listColors = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array('txtSearch' => $txtSearch);

        return view("admin.product.listColors")
            ->with("title", $title)
            ->with("listColors", $listColors)
            ->with("conditionPage", $conditionPage);
    }

    public function addColors(Request $request){
        $title  = "Thêm mới màu";
        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tiêu đề";
            if(empty($errors)) {
                $s_new_colors = Colors::addColors($params);
                if($s_new_colors) {
                    $params = null;
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
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
        $errors    = NULL;
        $params    = $request->all();
        $getColors = Colors::findOrFail((int)$id)->toArray();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tiêu đề";
            if(empty($errors)) {
                $editColors = Colors::editColors($params);
                if($editColors) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getColors = $params;
        }
        // reload data again
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
    public function statusProduct($id){
        $get_product = Product::findOrFail((int)$id);
        if(!empty($get_product)){
            if($get_product->status)
                $get_product->status = 0;
            else
                $get_product->status = 1;
        }
        echo $get_product->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

	public function listProduct(Request $request){
        $title        = "Danh Sách Sản Phẩm";
        $page         = isset($request->page) ? $request->page : 1;
        $builder      = Product::select();
        $txtSearch    = isset($request->txtSearch) ? $request->txtSearch : '';
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();
        $listBrand    = Brand::getList();
        $typePrice    = $this->getOption('typePrice');
        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%")
                ->orWhere('code_id','like',"%{$txtSearch}%");
        }

        $builder->orderByRaw("ord ASC, id DESC");
        $totalResult = $builder->count();
        $listProduct = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array(
            'txtSearch' => $txtSearch
        );

		return view("admin.product.listProduct")
            ->with("title", $title)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("listProduct", $listProduct)
            ->with("listBrand", $listBrand)
            ->with("conditionPage", $conditionPage)
            ->with("typePrice", $typePrice);
	}

    public function addProduct(Request $request){
        $title        = "Thêm mới sản phẩm";
        $errors       = NULL;
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();
        $listBrand    = Brand::getList();
        $typePrice    = $this->getOption('typePrice');
        $params       = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title']       = "Vui lòng nhập tiêu đề";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($params['price'])) $errors['price']       = "Vui lòng nhập giá (Nhập 0 = SĐT)";
            if(empty($params['numbers'])) $errors['numbers']   = "Vui lòng nhập số lượng";
            if(empty($params['colors'])) $errors['colors']     = "Vui lòng chọn màu sắc";
            if(empty($errors)) {
                $clsImg = new Img();
                $result = $clsImg->uploadImages("product/");
                foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
                $s_new_product = Product::addProduct($params);

                if($s_new_product) {
                    $params = array();
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.product.addProduct")
            ->with("title", $title)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("listBrand", $listBrand)
            ->with("errors", $errors)
            ->with("params", $params)
            ->with("typePrice", $typePrice);
    }

    public function editProduct(Request $request){
        $title        = "Sửa sản phẩm";
        $id           = (int) $request->route('id');
        $clsImg      = new Img();
        $errors       = NULL;
        $listColors   = Colors::getList();
        $listCategory = ProductCategory::getList();
        $listType     = ProductType::getList();
        $listBrand    = Brand::getList();
        $typePrice    = $this->getOption('typePrice');
        $getProduct   = Product::findOrFail((int)$id)->toArray();
        $params       = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title']       = "Vui lòng nhập tiêu đề";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($params['price'])) $errors['price']       = "Vui lòng nhập giá (Nhập 0 = SĐT)";
            if(empty($params['numbers'])) $errors['numbers']   = "Vui lòng nhập số lượng";
            if(empty($params['colors'])) $errors['colors']     = "Vui lòng chọn màu sắc";
            if(empty($errors)) {
                $result = $clsImg->uploadImages("product/");
                foreach ($_FILES as $key => $value) {
                    if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                        $params[$key] = $result[$key];
                        $clsImg->removeImages("product/",$getProduct[$key]);
                    }
                    else {
                        if(empty($params[$key."_url"])) $clsImg->removeImages("product/",$getProduct[$key]);
                        $params[$key] = $params[$key."_url"];
                    }
                }

                $statusUpdate = Product::editProduct($params);
                if($statusUpdate) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getProduct = $params;
        }
        return view("admin.product.editProduct")
            ->with("title" , $title )
            ->with("product", $getProduct)
            ->with("listBrand", $listBrand)
            ->with("listColors", $listColors)
            ->with("listCategory", $listCategory)
            ->with("listType", $listType)
            ->with("errors", $errors)
            ->with("typePrice", $typePrice);
    }

    public function delProduct($id){
        $product = Product::find((int)$id)->delete();
        if($product) {
            if(!empty($product->pimg_list) && file_exists(BASE_IMG."product/".$product->pimg_list))
               unlink(BASE_IMG."product/".$product->pimg_list);
           if(!empty($product->pimg_detail) && file_exists(BASE_IMG."product/".$product->pimg_detail))
               unlink(BASE_IMG."product/".$product->pimg_detail);
           if(!empty($product->pimg1) && file_exists(BASE_IMG."product/".$product->pimg1))
               unlink(BASE_IMG."product/".$product->pimg1);
           if(!empty($product->pimg2) && file_exists(BASE_IMG."product/".$product->pimg2))
               unlink(BASE_IMG."product/".$product->pimg2);
           if(!empty($product->pimg3) && file_exists(BASE_IMG."product/".$product->pimg3))
               unlink(BASE_IMG."product/".$product->pimg3);
           if(!empty($product->pimg4) && file_exists(BASE_IMG."product/".$product->pimg4))
               unlink(BASE_IMG."product/".$product->pimg4);
           if(!empty($product->pimg5) && file_exists(BASE_IMG."product/".$product->pimg5))
               unlink(BASE_IMG."product/".$product->pimg5);
            $product->delete();
        }
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
        $totalResult  = $builder->count();
        $listProduct  = $builder->paginate(LIMIT_PAGE);

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
            $limitPage = LIMIT_PAGE;
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

    //  crod CateProduct
    public function statusCateProduct($id){
        $get_cproduct = ProductCategory::findOrFail((int)$id);
        if(!empty($get_cproduct)){
            if($get_cproduct->status)
                $get_cproduct->status = 0;
            else
                $get_cproduct->status = 1;
        }
        echo $get_cproduct->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function listCateProduct(Request $request){
        $title     = "Danh Sách Loại Sản Phẩm";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = ProductCategory::select();
        $listItem  = ProductItem::getList();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%");
        }
        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listCategory = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array('txtSearch' => $txtSearch);

        return view("admin.product.listCateProduct")
            ->with("title", $title)
            ->with("listItem", $listItem)
            ->with("listCategory", $listCategory)
            ->with("conditionPage", $conditionPage);
	}

    public function addCateProduct(Request $request){
        $title      = "Thêm mới loại sản phẩm";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $listItem   = ProductItem::getList();
        $params     = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $s_new_cateproduct = ProductCategory::addCateProduct($params);
                if($s_new_cateproduct) {
                    $params  = null;
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.product.addCateProduct")
        	->with("title", $title)
			->with("errors", $errors)
            ->with("params", $params)
            ->with("listItem", $listItem);
    }

    public function editCateProduct(Request $request){
        $title    = "Sửa loại sản phẩm";
        $id       = (int) $request->route('id');
        $errors   = NULL;
        $listItem = ProductItem::getList();
        $getCate  = ProductCategory::findOrFail((int)$id)->toArray();
        $params   = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $editCateProduct = ProductCategory::editCateProduct($params);
                if($editCateProduct) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getCate = $params;
        }
        return view("admin.product.editCateProduct")
            ->with("title", $title)
            ->with("category", $getCate)
            ->with("errors", $errors)
            ->with("listItem", $listItem);
    }

    public function delCateProduct($id){
        $existProduct = Product::where("id_cate","=" , $id)->count();
        if(!$existProduct) ProductCategory::find((int)$id)->delete();
        $back_url     = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    //  crod TypeProduct
    public function listTypeProduct(Request $request){
        $title     = "Danh sách thể loại sản phẩm";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = ProductType::select();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%");
        }

        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listType = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array('txtSearch' => $txtSearch);

        return view("admin.product.listTypeProduct")
            ->with("title", $title)
            ->with("listType", $listType)
            ->with("conditionPage", $conditionPage);
    }

    public function addTypeProduct(Request $request){
        $title  = "Thêm mới thể loại sản phẩm";
        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên thể loại";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $s_new_typeproduct = ProductType::addTypeProduct($params);
                if($s_new_typeproduct) {
                    $params = null;
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
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
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên thể loại";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $editTypeProduct = ProductType::editTypeProduct($params);
                if($editTypeProduct) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
        }
        $getType = ProductType::findOrFail((int)$id);
        return view("admin.product.editTypeProduct")
            ->with("title", $title)
            ->with("type", $getType)
            ->with("errors", $errors);
    }

    public function delTypeProduct($id){
        $existProduct = Product::where("type","=" , $id)->count();
        if(!$existProduct) ProductType::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    //  crod Cart Product
    public function listCart (){
        $title  = "Danh Sách Đặt Hàng";
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
        $list_cart = $m_cart->paginate(LIMIT_PAGE);
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
            "errors" => $errors));
    }

    //  crod ProductItem
    public function statusItemProduct($id){
        $getItemProduct = ProductItem::findOrFail((int)$id);
        if(!empty($getItemProduct)){
            if($getItemProduct->status)
                $getItemProduct->status = 0;
            else
                $getItemProduct->status = 1;
        }
        echo $getItemProduct->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function listItemProduct(Request $request){
        $title    = "Danh sách mục sản phẩm";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = ProductItem::select();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) {$builder->where('title','like',"%{$txtSearch}%"); }

        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listItem = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array('txtSearch' => $txtSearch);

        return view("admin.product.listItemProduct")
            ->with("title", $title)
            ->with("listItem", $listItem)
            ->with("conditionPage", $conditionPage);
    }

    public function addItemProduct(Request $request){
        $title      = "Thêm mới danh mục sản phẩm";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $listItem   = ProductItem::getList();
        $params     = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên danh mục";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $newItemProduct = ProductItem::addItemProduct($params);
                if($newItemProduct) {
                    $params  = null;
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.product.addItemProduct")
        	->with("title", $title)
			->with("errors", $errors)
            ->with("params", $params)
            ->with("listItem", $listItem);
    }

    public function editItemProduct(Request $request){
        $title   = "Sửa danh mục sản phẩm";
        $id      = (int) $request->route('id');
        $errors  = NULL;
        $getItem = ProductItem::findOrFail((int)$id)->toArray();
        $params  = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên danh mục";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $editItemProduct = ProductItem::editItemProduct($params);
                if($editItemProduct) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getItem = $params;
        }
        return view("admin.product.editItemProduct")
            ->with("title", $title)
            ->with("item", $getItem)
            ->with("errors", $errors);
    }

    public function delItemProduct($id){
        $existProductCate = ProductCategory::where("item_id","=" , $id)->count();
        if(!$existProductCate) ProductItem::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    // brand
    public function statusBrand($id){
        $brand = Brand::findOrFail((int)$id);
        if(!empty($brand)){
            if($brand->status)
                $brand->status = 0;
            else
                $brand->status = 1;
        }
        echo $brand->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function listBrand(Request $request){
        $title     = "Danh sách thương hiệu";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = Brand::select();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) { $builder->where('title','like',"%{$txtSearch}%"); }
        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listBrand   = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array('txtSearch' => $txtSearch);

        return view("admin.product.listBrand")
            ->with("title", $title)
            ->with("listBrand", $listBrand)
            ->with("conditionPage", $conditionPage);
    }

    public function addBrand(Request $request){
        $title      = "Thêm mới thương hiệu";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $params     = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title']       = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $clsImg    = new Img();
                $result = $clsImg->uploadImages("brand/");
                foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
                $addBrand = Brand::addBrand($params);
                if($addBrand) {
                    $params = array();
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.product.addBrand")
            ->with("title", $title)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editBrand(Request $request){
        $title   = "Sửa thương hiệu";
        $id      = (int) $request->route('id');
        $errors  = NULL;
        $getBrand = Brand::findOrFail((int)$id)->toArray();
        $params  = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title']       = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $clsImg = new Img();
                $result = $clsImg->uploadImages("brand/");
                foreach ($_FILES as $key => $value) {
                    if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                        $params[$key] = $result[$key];
                        $clsImg->removeImages("brand/",$getBrand[$key]);
                    }
                    else {
                        if(empty($params[$key."_url"])) $clsImg->removeImages($getBrand[$key]);
                        $params[$key] = $params[$key."_url"];
                    }
                }
                $editBrand = Brand::editBrand($params);
                if($editBrand) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getBrand = $params;
        }
        return view("admin.product.editBrand")
            ->with("title", $title)
            ->with("brand", $getBrand)
            ->with("errors", $errors);
    }

    public function delBrand($id){
        $existProduct = Product::where("brand","=" , $id)->count();
        if(!$existProduct) Brand::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }
}
