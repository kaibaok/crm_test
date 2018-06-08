<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\News;
use App\Models\Admin\NewsCategory;
use App\Events\Img;
use DateTime,Session;
use App\User;

class ProductController extends Controller
{
    const LIMIT_PAGE   = 5;

    //  crod News
    public function index(Request $request){
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

    public function addNews(Request $request){
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

    public function editNews(Request $request){
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

    public function delNews($id){
        Product::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function sortNews(Request $request){
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

    public function ajaxSortNews(Request $request){
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
