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
// Route::any('user/edit/{id?}', 'Admin\UserController@editUser');
// Route::get('user/del/{id?}', 'Admin\UserController@delUser');
