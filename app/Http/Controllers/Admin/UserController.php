<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Models\Admin\Permission;

class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }

    public function listUser (){
		$title           = "Danh Sách User";
		$list_user       = User::paginate(20);
		$list_permission = Permission::getList();
        $list_gender     = $this->listGender();
    	return view("admin.user.listUser")
    			->with("view",array("title"           => $title,
									"list_user"       =>$list_user,
                                    "list_gender"     => $list_gender,
									"list_permission" =>$list_permission));
    }

    //  crod User
    public function addUser(){
        $title  = "Thêm mới User";
        $errors = NULL;
        $list_permission = Permission::getList();
        $list_gender     = $this->listGender();
        if(!empty($_POST)){
            $s_new_user = User::addUser($_POST);
            if($s_new_user) {
                $_POST  = empty($_POST);
                $errors = "Thêm thành công";
            }else{
                $errors = "Thêm thất bại";
            }
        }
        return view("admin.user.addUser")->with("view",array("title" => $title ,
            "list_permission" => $list_permission,
            "list_gender"     => $list_gender,
            "errors"          => $errors));
    }

    public function editUser($id){
        $title  = "Sửa User";
        $errors = NULL;
        if(!empty($_POST)){
            $errors = User::editUser($_POST);
            if($errors) $errors = "Sủa thành công";
            else $errors = "Sửa thất bại";
        }
        $get_user = User::findOrFail((int)$id);
        $list_permission = Permission::getList();
        $list_gender     = $this->listGender();
        return view("admin.user.editUser")->with("view",array("title" => $title ,
            "list_permission" => $list_permission,
            "list_gender"     => $list_gender,
            "detail_user"     => $get_user,
            "id"              => (int)$id,
            "errors"          => $errors));
    }

    public function delUser($id){
        User::find($id)->delete();
        $back_url = redirect()->getUrlGenerator()->previous();
        return redirect()->guest($back_url);
    }

    public function ajaxSearchUser(){
        $list_user = NULL;
        if(!empty($_POST)){
            $txt_search  = htmlspecialchars(trim(strip_tags($_POST['txt_search'])));
            $list_user = User::searchOption($txt_search);
            $list_permission = Permission::getList();
            $list_gender     = $this->listGender();
        }
        return view("admin.user.ajaxListUser")->with("view",array("list_user" => $list_user,
                "list_gender"     => $list_gender,
                "list_permission" =>$list_permission));
    }

}
