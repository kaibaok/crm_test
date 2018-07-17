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
    			return array( 'all' => "Tất cả" , 1 => "Đã thanh toán" , 2 => 'Chưa thanh toán' );
    		break;
    		case 'typePaid':
    			return array( 'all' => "Tất cả" , 1 => "Member đặt" , 2 => 'Admin đặt' );
    		break;
            case 'typePrice':
                return array( 1 => "Giá bình thường", 2 => "Giá Liên hệ", 3 => "Hết hàng");
            case 'listSize':
                return array("xs","s","m","l","xl");
    		default:
    			return NULL;
    		break;
    	}
    }

    public function __construct(Route $route)
    {
        $prefix = $this->getRouter()->getCurrentRoute()->getPrefix();
        $user = Auth::user();
        if($prefix == "/admin") {
            if($user){
                if( $user->permission < 1) {
                    Auth::logout();
                    Redirect::to('/admin/login')->send();
                }
                // Redirect::to('403')->send();
            } else {
                $uri = \Request::path();
                if($uri != "admin/login")
                    Redirect::to('/admin/login')->send();
            }
        } else {
            $listMenu  = Menu::findOrFail(1);
            $arr       = json_decode($listMenu->list,true);
            $arrSP     = json_decode($listMenu->list_sp,true);
            $listBrandLayout = Brand::select()->where(array("status" => 1))->orderByRaw("id DESC")->get();
            View::share('listMenu', $arr);
            View::share('listMenuSP', $arrSP);
            View::share('listBrandLayout', $listBrandLayout);
        }
    }
}

