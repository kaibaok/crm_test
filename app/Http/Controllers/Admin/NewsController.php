<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Admin\Colors;
use App\Models\Admin\News;
use App\Models\Admin\NewsCategory;
use App\Events\Img;
use DateTime,Session;
use App\User;

class NewsController extends Controller
{
    const LIMIT_PAGE   = 5;

    // news cate
    public function statusNewsCate($id){
        $newsCate = NewsCategory::findOrFail((int)$id);
        if(!empty($newsCate)){
            if($newsCate->status)
                $newsCate->status = 0;
            else
                $newsCate->status = 1;
        }
        echo $newsCate->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function listNewsCate(){
        $title    = "Danh sách thể loại tin";
        $listNewsCate = NewsCategory::orderBy('id','DESC')->paginate(self::LIMIT_PAGE);
        return view("admin.news.listNewsCate")
            ->with("title", $title)
            ->with("listNewsCate", $listNewsCate);
    }

    public function addNewsCate(Request $request){
        $title      = "Thêm mới thể loại tin";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $listNewsCate   = NewsCategory::getList();
        $params     = $request->all();
        if ($request->isMethod('post')) {
            $newNewsCate = NewsCategory::addNewsCate($params);
            if($newNewsCate) {
                $params  = null;
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.news.addNewsCate")
            ->with("title", $title)
            ->with("errors", $errors)
            ->with("params", $params)
            ->with("listNewsCate", $listNewsCate);
}

    public function editNewsCate(Request $request){
        $title  = "Sửa thể loại tin";
        $id     = (int) $request->route('id');
        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            $errors = NewsCategory::editNewsCate($params);
            if($errors) $errors = "Sủa thành công";
            else        $errors = "Sửa thất bại";
        }
        $newsCate = NewsCategory::findOrFail((int)$id);
        return view("admin.news.editNewsCate")
            ->with("title", $title)
            ->with("newsCate", $newsCate)
            ->with("errors"  , $errors);
    }

    public function delNewsCate($id){
        NewsCategory::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    // list news
    public function index(Request $request){
        $title        = "Danh Sách Tin Tức";
        $page         = isset($request->page) ? $request->page : 1;
        $builder      = News::select();
        $txtSearch    = isset($request->txtSearch) ? $request->txtSearch : '';
        $listNewsCate = NewsCategory::getList();

        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%");
        }

        $builder->orderByRaw("ord ASC, id DESC");
        $totalResult = $builder->count();
        $listNews    = $builder->paginate(self::LIMIT_PAGE);

        $conditionPage = array(
            'txtSearch' => $txtSearch
        );

        return view("admin.news.index")
            ->with("title", $title)
            ->with("listNewsCate", $listNewsCate)
            ->with("listNews", $listNews)
            ->with("conditionPage", $conditionPage);
    }

    public function add(Request $request){
        $title        = "Thêm mới tin tức";
        $errors       = NULL;
        $listNewsCate = NewsCategory::getList();
        $params       = $request->all();
        if ($request->isMethod('post')) {
            $clsImg = new Img();
            $result = $clsImg->uploadImages();
            foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
            $sNews = News::addNews($params);
            if($sNews) {
                $params = array();
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.news.add")
            ->with("title", $title)
            ->with("listNewsCate", $listNewsCate)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function edit(Request $request){
        $title        = "Sửa tin tức";
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


}
