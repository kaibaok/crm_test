<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Permission;

class UserController extends Controller
{
    public function listUser (){
        $title           = "Danh Sách User";
        $list_user       = User::orderBy('id','DESC')->orderBy('created_at','DESC')->paginate(20);
        $list_permission = Permission::getList();
        $list_gender     = $this->getOption('listGender');
        return view("admin.user.listUser")
                ->with("title", $title)
                ->with("list_user", $list_user)
                ->with("list_gender", $list_gender)
                ->with("list_permission", $list_permission);
    }

    //  crod User
    public function addUser(Request $request){
        $title  = "Thêm mới User";
        $errors = NULL;
        $params = $request->all();
        $list_permission = Permission::getList();
        $list_gender     = $this->getOption('listGender');
        if ($request->isMethod('post')) {
            if(empty($params['name'])) $errors['name'] = "Vui lòng nhập tiêu đề";
            if(empty($params['password'])) $errors['password'] = "Vui lòng nhập mật khẩu";
            if(empty($params['phone'])) $errors['phone'] = "Vui lòng nhập số điện thoại";
            if(empty($params['address'])) $errors['address'] = "Vui lòng nhập địa chỉ";
            if(empty($params['email'])) $errors['email'] = "Vui lòng nhập địa chỉ";
            else if(!filter_var($params['email'], FILTER_VALIDATE_EMAIL))  $errors['email'] = "Vui lòng kiểm tra lại email";

            if(empty($errors)) {
                $s_new_user =  User::addUser($params);
                if($s_new_user) {
                    $params = null;
                    $errors['finish'] = "Thêm thành công";
                }else{
                    $errors['finish'] = "Thêm thất bại";
                }
            }
        }
        return view("admin.user.addUser")
            ->with("title", $title)
            ->with("list_permission", $list_permission)
            ->with("list_gender", $list_gender)
            ->with("errors", $errors)
            ->with("params", $params);
    }

    public function editUser(Request $request){
        $title           = "Sửa User";
        $id              = (int) $request->route('id');
        $errors          = NULL;
        $params          = $request->all();
        $list_permission = Permission::getList();
        $list_gender     = $this->getOption('listGender');
        $get_user        = User::findOrFail((int)$id)->toArray();

        if ($request->isMethod('post')) {
            if(empty($params['name'])) $errors['name']         = "Vui lòng nhập tiêu đề";
            if(empty($params['password'])) $errors['password'] = "Vui lòng nhập mật khẩu";
            if(empty($params['phone'])) $errors['phone']       = "Vui lòng nhập số điện thoại";
            if(empty($params['address'])) $errors['address']   = "Vui lòng nhập địa chỉ";
            if(empty($params['email'])) $errors['email']       = "Vui lòng nhập địa chỉ";
            else if(!filter_var($params['email'], FILTER_VALIDATE_EMAIL))  $errors['email'] = "Vui lòng kiểm tra lại email";
            if(empty($errors)) {
                $editUser = User::editUser($params);
                if($editUser) $errors['finish'] = "Sửa thành công";
                else $errors['finish'] = "Sửa thất bại";
            }
            $get_user = $params;
        }

        return view("admin.user.editUser")
            ->with("title", $title)
            ->with("list_permission", $list_permission)
            ->with("list_gender", $list_gender)
            ->with("detail_user", $get_user)
            ->with("errors", $errors);
    }

    public function delUser($id){
        User::find($id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function ajaxSearchUser(){
        $list_user = NULL;
        if(!empty($_POST)){
            $txt_search      = htmlspecialchars(trim(strip_tags($_POST['txt_search'])));
            $list_user       = User::searchOption($txt_search);
            $list_permission = Permission::getList();
            $list_gender     = $this->getOption('listGender');
        }
        return view("admin.user.ajaxListUser")
            ->with("list_user", $list_user)
            ->with("list_gender", $list_gender)
            ->with("list_permission", $list_permission);
    }

}
