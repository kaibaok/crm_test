<?php

/* UserController------------------------------*/

// index admin
Route::get('/', 'Admin\IndexController@index');
// login - logout
Route::any('login', 'Admin\LoginController@login');
Route::get('logout', 'Admin\LoginController@logout');

// xu ly user
Route::get('user', 'Admin\UserController@listUser');
Route::any('user/add', 'Admin\UserController@addUser');
Route::any('user/edit/{id?}', 'Admin\UserController@editUser');
Route::get('user/del/{id?}', 'Admin\UserController@delUser');

Route::any('user/ajax-suser', 'Admin\UserController@ajaxSearchUser');

// List Product
Route::any('product', 'Admin\ProductController@listProduct');

// list cate product
Route::any('cate-product', 'Admin\ProductController@listCateProduct');
Route::any('cate-product/add', 'Admin\ProductController@addCateProduct');

