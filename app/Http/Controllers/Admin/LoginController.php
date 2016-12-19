<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login (){
        $errors = NULL;        
		if (Auth::check()) return redirect()->guest("admin");
    	if(!empty($_POST)){
			$email    = htmlspecialchars(trim($_POST['email']));
			$password = htmlspecialchars(trim($_POST['password']));   	
            $remember = str_random(10);
    		if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
		    	return redirect()->guest('/admin');    	  	
    	  	}else{
                $errors = array("error"=>"has-error");
            }
    	}
    	return view("admin.login")->with("errors",$errors);
    }

    public function logout(){
        Auth::logout();
        return redirect()->guest("admin");
    }
}
