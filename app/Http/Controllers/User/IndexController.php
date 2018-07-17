<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\Event;
use App\Models\Slider;
use App\Models\Brand;
use App\Models\Product;
use App\Models\ProductType;
use App\Models\ProductCategory;
use App\Models\News;
use App\Models\NewsCategory;

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
        // list tab 3 part
        $listCategory    = ProductCategory::getListHomePage();
        $listProductType = ProductType::getList();
        $listTop         = $listMiddle = $listFooter = null;
        if(!empty($homePage)) {
            if(!empty($homePage['list_top'])) {
                $listTop = Product::getByArrCateUP($homePage['list_top']);
            }

            if(!empty($homePage['list_middle'])) {
                $listMiddle = Product::getByArrCateUP($homePage['list_middle']);
            }

            if(!empty($homePage['list_footer'])) {
                $listFooter = Product::getListByTypeUP($homePage['list_footer']);
            }
        }
        $listSlider       = Slider::select()->where(array("status" => 1))->orderByRaw("id DESC")->get();
        $listCategoryNews = NewsCategory::getNewsUP(3,6);

        return view("user.index.index")
            ->with('homePage', $homePage)
            ->with('event', $event)
            ->with('isOpenEvent', $isOpenEvent)
            ->with('listSlider', $listSlider)
            ->with('listTop', $listTop)
            ->with('listMiddle', $listMiddle)
            ->with('listFooter', $listFooter)
            ->with('listCategory', $listCategory)
            ->with('listProductType', $listProductType)
            ->with('listCategoryNews', $listCategoryNews)
            ->with("title", $title);
    }
}
