<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use App\Models\Admin\Slider;
use App\Models\Admin\Event;
use App\Models\Admin\HomePage;
use App\Events\Img;

class IndexController extends Controller
{
    public function index()
    {
		$title = "Admin CRM";
    	return view("admin.index.index")->with("view",array("title"=>$title));
    }

    public function statusSlider($id)
    {
        $slider = Slider::findOrFail((int)$id);
        if(!empty($slider)){
            if($slider->status)
                $slider->status = 0;
            else
                $slider->status = 1;
        }
        echo $slider->save();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function slider(Request $request)
    {
        $title        = "Danh Sách Slider";
        $page         = isset($request->page) ? $request->page : 1;
        $builder      = Slider::select();
        $txtSearch    = isset($request->txtSearch) ? $request->txtSearch : '';

        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%");
        }

        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listSlider  = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array(
            'txtSearch' => $txtSearch
        );

        return view("admin.index.slider")
            ->with("title", $title)
            ->with("listSlider", $listSlider)
            ->with("conditionPage", $conditionPage);
    }

    public function addSlider(Request $request)
    {
        $title        = "Thêm Mới Slider";
        $errors       = NULL;
        $params       = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên slider";
            if(empty($errors)) {
                $clsImg = new Img();
                $result = $clsImg->uploadImages("slider/");
                foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
                $slider = Slider::addSlider($params);
                if($slider) {
                    $params = array();
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.index.addSlider")
            ->with("title", $title)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editSlider(Request $request)
    {
        $title        = "Sửa Slider";
        $id           = (int) $request->route('id');
        $cls_img      = new Img();
        $errors       = NULL;
        $getSlider      = Slider::findOrFail((int)$id)->toArray();
        $params       = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title'] = "Vui lòng nhập tên loại tin";
            if(empty($errors)) {
                $result = $cls_img->uploadImages("slider/");
                foreach ($_FILES as $key => $value) {
                    if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                        $params[$key] = $result[$key];
                        $cls_img->removeImages("slider/",$getSlider[$key]);
                    }
                    else {
                        if(empty($params[$key."_url"])) $cls_img->removeImages($getSlider[$key]);
                        $params[$key] = $params[$key."_url"];
                    }
                }
                $editSlider = Slider::editSlider($params);
                if($editSlider) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $getSlider = $params;
         }
        return view("admin.index.editSlider")
            ->with("title" , $title )
            ->with("slider", $getSlider)
            ->with("errors", $errors);
    }

    public function delSlider($id)
    {
        $slider = Slider::find((int)$id);
        if($slider){
            if(!empty($slider->simg_detail) && file_exists(BASE_IMG."slider/".$slider->simg_detail))
                unlink(BASE_IMG."slider/".$slider->img_detail);
            $slider->delete();
        }
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function homePage(Request $request)
    {
        $title   = "Trang HomePage";
        $cls_img = new Img();
        $params  = $request->all();
        if ($request->isMethod('post')) {
            $result = $cls_img->uploadImages("home/");
            foreach ($_FILES as $key => $value) {
                if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                    $params[$key] = $result[$key];
                    $cls_img->removeImages("home/",$getSlider[$key]);
                }
                else {
                    if(empty($params[$key."_url"])) $cls_img->removeImages($getSlider[$key]);
                    $params[$key] = $params[$key."_url"];
                }
            }
            $editHomePage = HomePage::editHomePage($params);
            if($editHomePage) $errors['finish'] = "Sửa thành công";
            else $errors['finish'] = "Sửa thất bại";
            $getSlider = $params;
        }
        return view("admin.index.homePage")
            ->with("title" , $title );
    }


    // event
    public function listEvent(Request $request){
        $title     = "Danh sách sự kiện";
        $page      = isset($request->page) ? $request->page : 1;
        $builder   = Event::select();
        $txtSearch = isset($request->txtSearch) ? $request->txtSearch : '';
        if(!empty($txtSearch)) {
            $builder->where('title','like',"%{$txtSearch}%");
        }

        $builder->orderByRaw("id DESC");
        $totalResult = $builder->count();
        $listEvent = $builder->paginate(LIMIT_PAGE);

        $conditionPage = array(
            'txtSearch' => $txtSearch
        );

        return view("admin.index.listEvent")
            ->with("title", $title)
            ->with("listEvent", $listEvent)
            ->with("conditionPage", $conditionPage);
    }

    public function addEvent(Request $request){
        $title      = "Thêm mới sự kiện";
        $errors     = NULL;
        $listStatus = $this->getOption('listStatus');
        $params     = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title']       = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $clsImg = new Img();
                $result = $clsImg->uploadImages("event/");
                foreach ($_FILES as $key => $value) $params[$key] = $result[$key];
                $addEvent = Event::addEvent($params);
                if($addEvent) {
                    $params = array();
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.index.addEvent")
            ->with("title", $title)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editEvent(Request $request){
        $title  = "Sửa sự kiện";
        $id     = (int) $request->route('id');
        $errors = NULL;
        $event  = Event::findOrFail((int)$id)->toArray();
        $params = $request->all();
        if ($request->isMethod('post')) {
            if(empty($params['title'])) $errors['title']       = "Vui lòng nhập tên loại tin";
            if(empty($params['seo_link'])) $errors['seo_link'] = "Vui lòng nhập seo link";
            if(empty($errors)) {
                $result = $cls_img->uploadImages("event/");
                foreach ($_FILES as $key => $value) {
                    if($params[$key."_url"] != $result[$key] && !empty($result[$key])){
                        $params[$key] = $result[$key];
                        $cls_img->removeImages("event/",$getNews[$key]);
                    }
                    else {
                        if(empty($params[$key."_url"])) $cls_img->removeImages($getNews[$key]);
                        $params[$key] = $params[$key."_url"];
                    }
                }
                $editEvent = Event::editEvent($params);
                if($editEvent) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $event = $params;
        }
        return view("admin.index.editEvent")
            ->with("title", $title)
            ->with("event", $event)
            ->with("errors", $errors);
    }

    public function delEvent($id){
        Event::find((int)$id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

}
