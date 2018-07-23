<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;
use App\User;
use MetaTag;

class UserController extends Controller {

    public function login(Request $request)
    {
        MetaTag::set('title', 'Đăng nhập');
        MetaTag::set('description', 'Đăng nhập');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        $errors = NULL;
        $params = $request->all();
        if (Auth::check()) {
           return redirect()->guest("/");
        } else {
            if ($request->isMethod('post')) {
                $name     = htmlspecialchars(trim($params['name']));
                $password = htmlspecialchars(trim($params['password']));
                if (Auth::attempt(['name' => $name, 'password' => $password], false)) {
                    return redirect()->guest('/');
                } else {
                    $errors = array("login"=>"Vui lòng kiểm tra lại Tên đăng nhập hoặc Mật khẩu");
                }
            }
        }
        return view("user.user.login")
            ->with("errors",$errors)
            ->with("params",$params);
    }

    public function register(Request $request)
    {
        MetaTag::set('title', 'Đăng ký');
        MetaTag::set('description', 'Đăng ký');
        MetaTag::set('keywords', 'keyword');
        MetaTag::set('image', asset('/public/images/detail-logo.png'));
        MetaTag::set('author','Dot 89 Shop');

        $errors = NULL;
        $params = $request->all();
        if ($request->isMethod('post')) {
            $name     = trim(htmlspecialchars(strip_tags($params['name'])));
            $password = trim(htmlspecialchars(strip_tags($params['password'])));
            $gender   = (int) $params['gender'];
            $email    = $params['email'];
            $phone    = strip_tags($params['phone']);
            $address  = strip_tags($params['address']);
            if(empty($name)) $errors['name']         = "Vui lòng nhập tên tài khoản";
            if(empty($password)) $errors['password'] = "Vui lòng nhập mật khẩu";
            if(empty($phone)) $errors['phone']       = "Vui lòng nhập số điện thoại";
            if(empty($address)) $errors['address']   = "Vui lòng nhập địa chỉ";
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Vui lòng kiểm tra lại email";
            if(empty($errors)) {
                $get_user = User::where('name',$name)->where('email', $email)->get()->toArray();
                if(!empty($get_user)) {
                    $errors['email'] = "Tài khoản hoặc Email này đã được đăng ký";
                } else {
                    $status = User::addUser(array(
                        'name'       => $name,
                        'password'   => bcrypt($password),
                        'email'      => $email,
                        'gender'     => $gender,
                        'permission' => 0,
                        'phone'      => $phone,
                        'address'    => $address,
                    )
                );
                    Auth::logout();
                    if (Auth::attempt(['name' => $name, 'password' => $password], false)) {
                        return redirect()->guest('/');
                    }
                }
            }
        }

        return view("user.user.register")
            ->with("errors",$errors)
            ->with("params",$params);

    }
}