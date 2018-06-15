<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Admin\Permission;

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
    public function addUser(){
        $title  = "Thêm mới User";
        $errors = NULL;
        $list_permission = Permission::getList();
        $list_gender     = $this->getOption('listGender');
        if(!empty($_POST)){
            $s_new_user = User::addUser($_POST);
            if($s_new_user) {
                $_POST  = empty($_POST);
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.user.addUser")
            ->with("title", $title)
            ->with("list_permission", $list_permission)
            ->with("list_gender", $list_gender)
            ->with("errors", $errors);
    }

    public function editUser($id){
        $title  = "Sửa User";
        $errors = NULL;
        if(!empty($_POST)){
            $errors = User::editUser($_POST);
            if($errors) $errors = "Sửa thành công";
            else $errors = "Sửa thất bại";
        }
        $get_user = User::findOrFail((int)$id);
        $list_permission = Permission::getList();
        $list_gender     = $this->getOption('listGender');
        return view("admin.user.editUser")
            ->with("title", $title)
            ->with("list_permission", $list_permission)
            ->with("list_gender", $list_gender)
            ->with("detail_user", $get_user)
            ->with("id", (int)$id)
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
