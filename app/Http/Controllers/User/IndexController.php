<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HomePage;
use App\Models\Event;

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
        return view("user.index.index")
            ->with('homePage', $homePage)
            ->with('event', $event)
            ->with('isOpenEvent', $isOpenEvent)
            ->with("title", $title);
    }
}
