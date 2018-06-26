<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Product;

class IndexController extends Controller
{
    public function index()
    {
        $title    = "Trang chủ";
        $homePage = HomePage::findOrFail(1)->toArray();
        $event    = Event::where(array("status" => 1))
            ->orderByRaw("id DESC")
            ->first();
        $isOpenEvent = false;
        if(!empty($event)) {
            $now = time();
            $isOpenEvent = ($now >= strtotime($event->time_open) && $now <= strtotime($event->time_close));
        }

        $listTop = $listMiddle = $listFooter = null;
        if(!empty($homePage)) {
            if(!empty($homePage['list_top'])) {
                $homePage['list_top'] = explode("|", $homePage['list_top']);
                $list_top = Product::getListByArrCate($homePage['list_top']);
            }

            if(!empty($homePage['list_middle'])) {
                $homePage['list_middle'] = explode("|", $homePage['list_middle']);
                $listMiddle = Product::getListByArrCate($homePage['list_middle']);
            }

            if(!empty($homePage['list_footer'])) {
                $homePage['list_footer'] = explode("|", $homePage['list_footer']);
                $listFooter = Product::getListByArrCate($homePage['list_footer']);
            }
        }


        $listSlider = Slider::select()->where(array("status" => 1))->orderByRaw("id DESC")->get();
        $listBrand  = Brand::select()->where(array("status" => 1))->orderByRaw("id DESC")->get();
        return view("user.index.index")
            ->with('homePage', $homePage)
            ->with('event', $event)
            ->with('isOpenEvent', $isOpenEvent)
            ->with('listSlider', $listSlider)
            ->with('listBrand', $listBrand)
            ->with("title", $title);
    }
}
