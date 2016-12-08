<?php 

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class UserController extends Controller
{

	public function __construct()
    {
        // $this->middleware('auth');
    }

    public function login (){
    	return view("admin.login");
    }

     public function index (){
    	return view("admin.index");
    }
}
