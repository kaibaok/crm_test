<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;

class IndexController extends Controller
{
    public function __construct()
    {
		$this->middleware('auth');
		$user = Auth::user();
		if($user && $user->permission < 1){
          Redirect::to('403')->send();
          Auth::logout();  
        } 
    }

    public function index (){
		$title = "Admin Shop QA";
    	return view("admin.index.index")->with("view",array("title"=>$title));
    }

}
