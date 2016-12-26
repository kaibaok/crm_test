<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Model\Admin;

class ProductController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function listProduct (){
		$title           = "Danh Sách Sản Phẩm";
		$list_product       = Product::paginate(20);
		// $list_permission = Permission::getList();
		// $list_gender     = $this->listGender();
		return view("admin.product.listProduct")
				->with("view",array("title"           => $title,
									// "list_user"       =>$list_user,
									// "list_gender"     => $list_gender,
									// "list_permission" =>$list_permission
									));
	}



}
