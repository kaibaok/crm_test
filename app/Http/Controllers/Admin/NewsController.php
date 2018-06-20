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

    public function listNewsCate(Request $request){
        $title     = "Danh sách thể loại tin";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = NewsCategory::select();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) { $builder->where('title','like',"%{$txtSearch}%"); }

        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listNewsCate  = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array(
            'txtSearch' => $txtSearch
        );

        return view("admin.news.listNewsCate")
            ->with("title", $title)
            ->with("conditionPage", $conditionPage)
            ->with("listNewsCate", $listNewsCate);
    }

    public function addNewsCate(Request $request){
        $title        = "Thêm mới thể loại tin";
        $errors       = NULL;
        $listStatus   = $this->getOption('listStatus');
        $listNewsCate = NewsCategory::getList();
        $params       = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $newNewsCate = NewsCategory::addNewsCate($params);
                if($newNewsCate) {
                    $params  = null;
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
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
        $newsCate = NewsCategory::findOrFail((int)$id)->toArray();
        $params = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $editNewsCate = NewsCategory::editNewsCate($params);
                if($editNewsCate) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $newsCate = $params;
        }
        return view("admin.news.editNewsCate")
            ->with("title", $title)
            ->with("newsCate", $newsCate)
            ->with("errors"  , $errors);
    }

    public function delNewsCate($id){
        $existNews = News::where("id_cate","=" , $id)->count();
        if(!$existNews) NewsCategory::find((int)$id)->delete();
        $back_url  = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    // list news
    public function status($id){
        $news = News::findOrFail((int)$id);
        if(!empty($news)){
            if($news->status)
                $news->status = 0;
            else
                $news->status = 1;
        }
        echo $news->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

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
        $listNews    = $builder->paginate(LIMIT_PAGE);

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
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $clsImg = new Img();
                $result = $clsImg->uploadImages("news/");
                foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
                $sNews = News::addNews($params);
                if($sNews) {
                    $params = array();
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
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
        $clsImg       = new Img();
        $errors       = NULL;
        $listNewsCate = NewsCategory::getList();
        $getNews      = News::findOrFail((int)$id)->toArray();
        $params       = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $result = $clsImg->uploadImages("news/");
                foreach ($_FILES as $key => $value) {
                    if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                        $params[$key] = $result[$key];
                        $clsImg->removeImages("news/",$getNews[$key]);
                    }
                    else {
                        if(empty($params[$key."_url"])) $clsImg->removeImages($getNews[$key]);
                        $params[$key] = $params[$key."_url"];
                    }
                }
                $editNews = News::editNews($params);
                if($editNews) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getNews = $params;
         }
        return view("admin.news.edit")
            ->with("title" , $title )
            ->with("news", $getNews)
            ->with("listNewsCate", $listNewsCate)
            ->with("errors", $errors);
    }

    public function del($id){
        $news = News::find((int)$id);
        if($news) {
            if(!empty($news->nimg_list) && file_exists(BASE_IMG."news/".$news->nimg_list))
                unlink(BASE_IMG."news/".$news->nimg_list);
             if(!empty($news->nimg_detail) && file_exists(BASE_IMG."news/".$news->nimg_detail))
                unlink(BASE_IMG."news/".$news->nimg_detail);
            $news->delete();
        }

        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function sort(Request $request){
        $title        = "Sắp Xếp Tin Tức";
        $page         = isset($request->page) ? $request->page : 1;
        $builder      = News::select();
        $listNewsCate = NewsCategory::getList();
        $builder->orderByRaw("ord ASC, id DESC");
        $totalResult  = $builder->count();
        $listNews  = $builder->paginate(LIMIT_PAGE);

        return view("admin.news.sort")
            ->with("title", $title)
            ->with("page", $page)
            ->with("listNewsCate", $listCategory)
            ->with("listNews", $listNews);
    }

    public function ajaxSort(Request $request){
        $params = $request->all();
        if(!empty($params)) {
            parse_str($params['data'],$data);
            $page      = (int) $params['page'];
            $limitPage = LIMIT_PAGE;
            $offset    = $limitPage * ($page - 1);
            $listNews = News::orderByRaw("ord ASC, id DESC")->get();
            foreach ($listNews as $key => $value) {
                $news = News::find($value->id);
                $news->ord = $key+1;
                $news->save();
            }

            foreach ($data['item'] as $key => $value) {
                $key += $offset;
                $news = News::find($value);
                $news->ord = $key;
                $news->save();
            }
        }
        return response()->json(array("status" => true));
    }


}
