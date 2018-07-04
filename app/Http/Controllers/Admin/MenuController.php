<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Menu;
use App\Events\Img;
use DateTime,Session;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        $title = "Menu top";
        $params       = $request->all();
        $errors       = null;
        $getMenu      = Menu::findOrFail(1)->toArray();
        if ($request->isMethod('post')) {
            $editHomePage = Menu::editMenu($params);
            if($editHomePage) $errors['finish'] = "success";
            else $errors['finish'] = "error";
            $getMenu = $params;
        }
        return view("admin.menu.index")
            ->with("menu", $getMenu)
            ->with("errors", $errors)
            ->with("title",$title);
    }

}
