<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login (){
		if (Auth::check()) return redirect()->guest("admin");
    	return view("admin.login");
    }
}
