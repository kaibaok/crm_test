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
Route::any('product/add', 'Admin\ProductController@addProduct');
Route::any('product/edit/{id?}', 'Admin\ProductController@editProduct');
Route::get('product/del/{id?}', 'Admin\ProductController@delProduct');

// list cate product
Route::any('cate-product', 'Admin\ProductController@listCateProduct');
Route::any('cate-product/add', 'Admin\ProductController@addCateProduct');
Route::any('cate-product/edit/{id?}', 'Admin\ProductController@editCateProduct');
Route::get('cate-product/del/{id?}', 'Admin\ProductController@delCateProduct');
// list type product
Route::any('type-product', 'Admin\ProductController@listTypeProduct');
Route::any('type-product/add', 'Admin\ProductController@addTypeProduct');
Route::any('type-product/edit/{id?}', 'Admin\ProductController@editTypeProduct');
Route::get('type-product/del/{id?}', 'Admin\ProductController@delTypeProduct');
