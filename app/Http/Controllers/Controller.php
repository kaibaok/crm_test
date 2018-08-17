<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Routing\Route;
use App\Models\Menu;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Colors;
use App\Models\MemberOnline;
use MetaTag;
use Session;

class Controller extends BaseController
{
    use AuthorizesRequests, AuthorizesResources, DispatchesJobs, ValidatesRequests;

    public function getOption($type){
    	switch ($type) {
    		case 'listGender':
    			return array( 0 => "Nam" , 1 => "Nữ" );
    		break;
    		case 'listStatus':
    			return array( 0 => "Hiển thị" , 1 => "Ẩn" );
    		break;
    		case 'listPaid':
    			return array( 0 => "<span class='btn btn-warning btn-xs'>Chưa thanh toán</span>",
                    1 => "<span class='btn btn-info btn-xs'>Giao hàng</span>", 2 => "<span class='btn btn-success btn-xs'>Hoàn tất</span>");
    		break;
            case 'listPaidT':
                return array( 0 => "Chưa thanh toán", 1 => "Giao hàng", 2 => "Hoàn tất");
            break;
            case 'typePrice':
                return array( 1 => "Giá bình thường", 2 => "Giá Liên hệ", 3 => "Hết hàng");
            case 'listSize':
                return array("xs","s","m","l","xl");
    	$sd     = time();
            $count  = 1;
            dd($sd);
	default:
    			return NULL;
    		break;
    	}
    }

    public function __construct(Route $route)
    {
        $prefix = $this->getRouter()->getCurrentRoute()->getPrefix();
        $user   = Auth::user();
        if($prefix == "/admin") {
            if($user){
                if( $user->permission < 1) {
                    Auth::logout();
                    Redirect::to('/')->send();
                }
                // Redirect::to('403')->send();
            } else {
                $uri = \Request::path();
                if($uri != "admin/login")
                    Redirect::to('/admin/login')->send();
            }
        } else {
            $listMenu        = Menu::findOrFail(1);
            $arr             = json_decode($listMenu->list,true);
            $arrSP           = json_decode($listMenu->list_sp,true);
            $listBrandLayout = Brand::select()->where(array("status" => 1))->orderByRaw("id DESC")->get();
            $sCart           = Session::get('sCart');
            $listColors      = Colors::getList();

            MetaTag::set('title', 'This is a detail page');
            MetaTag::set('description', 'All about this detail page');
            MetaTag::set('keywords', 'All about this detail page,c,asd,as,da,d,s');
            MetaTag::set('image', asset('/public/images/detail-logo.png'));
            MetaTag::set('author','Dot 89 Shop');

            View::share('listColors', $listColors);
            View::share('sCart', $sCart);
            View::share('userInfo', $user);
            View::share('listMenu', $arr);
            View::share('listMenuSP', $arrSP);
            View::share('listBrandLayout', $listBrandLayout);
        }


        // set Member online
        $sid       = Session::getId();
        $ip        = $_SERVER['REMOTE_ADDR'];
        $time      = time();
        $timeCheck = $time-600;

        $isOnline = MemberOnline::where("sid", $sid)->first();
        if($isOnline) {
            $isOnline->update(array("created_at" => $time));
        } else {
            MemberOnline::insert(array(
                "sid"        => $sid,
                "ip"         => $ip,
                "created_at" => $time,
            ));
        }
        MemberOnline::checkOnline($timeCheck);
        // Set total Member
        if(!in_array($ip, file(IP_FILE, FILE_IGNORE_NEW_LINES))) {
            $current_val =  (file_exists(COUNTER_FILE)) ? file_get_contents(COUNTER_FILE) : 0;
            file_put_contents(IP_FILE, $ip."\n", FILE_APPEND);
            file_put_contents(COUNTER_FILE, ++$current_val);
        }


    }
}

