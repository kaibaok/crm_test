<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// 403 - default 404
Route::get('403', function(){
    return view("errors.403");
});

// Route::auth();

Route::group(['prefix' => '/'], function () {
    require_once("Routes/User/routes.php");
});

Route::group(['prefix' => 'admin'], function () {
  require_once("Routes/Admin/routes.php");
});



