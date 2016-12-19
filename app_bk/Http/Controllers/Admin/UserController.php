<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;
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
    	return view("admin.user.listuser")
    			->with("view",array("title"           => $title,
									"list_user"       =>$list_user,
									"list_permission" =>$list_permission));
    }
}
