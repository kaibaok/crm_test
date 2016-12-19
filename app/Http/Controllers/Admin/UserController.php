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
    	return view("admin.user.listUser")
    			->with("view",array("title"           => $title,
									"list_user"       =>$list_user,
									"list_permission" =>$list_permission));
    }

    //  crod User
    public function addUser(){
        $title  = "Add New User";
        $errors = NULL;
        $list_permission = Permission::getList();
        $list_gender     = $this->listGender();
        if(!empty($_POST)){
            $s_new_user = User::addUser($_POST);
            if($s_new_user) {
                $_POST  = empty($_POST);
                $errors = true;
            }else{
                $errors = false;
            }
        }
        return view("admin.user.addUser")->with("view",array("title" => $title ,
            "list_permission" => $list_permission,
            "list_gender"     => $list_gender,
            "errors"          => $errors));
    }

    public function delUser(){

    }

    public function editUser(){

    }

}
