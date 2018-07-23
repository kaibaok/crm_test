<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    public function login (Request $request){
        $errors = NULL;
        $params   = $request->all();
        if (Auth::check()) {
            return redirect()->guest("admin");
        } else {
            if ($request->isMethod('post')) {
                $remember = !empty($params['remember']) ? true : false;
                $email    = htmlspecialchars(trim($params['email']));
                $password = htmlspecialchars(trim($params['password']));
                if (Auth::attempt(['email' => $email, 'password' => $password], $remember)) {
                    return redirect()->guest('/admin');
                }else{
                    $errors = array("error"=>"has-error");
                }
            }
        }
    	return view("admin.login")
            ->with("errors",$errors)
            ->with("params",$params);
    }

    public function logout(){
        Auth::logout();
        return redirect()->guest("admin");
    }
}
