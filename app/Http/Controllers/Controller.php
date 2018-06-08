<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

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
    		default:
    			return NULL;
    		break;
    	}
    }

    public function __construct()
    {
        $this->middleware('auth');
        $user = Auth::user();

        if($user && $user->permission < 1){
            Redirect::to('403')->send();
            Auth::logout();
        }
    }
}

