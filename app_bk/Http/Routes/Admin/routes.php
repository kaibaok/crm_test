<?php

/* UserController------------------------------*/

// index admin
Route::get('/', 'Admin\IndexController@index');
// login
Route::get('login', 'Admin\LoginController@login');

// xu ly user
Route::get('user', 'Admin\UserController@listUser');
// Route::get('user', 'Admin\UserController@addUser');
// Route::get('user/{id?}', 'Admin\UserController@editUser');
// Route::get('user/{id?}', 'Admin\UserController@delUser');
