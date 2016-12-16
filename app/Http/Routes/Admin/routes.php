<?php

/* UserController------------------------------*/

// index admin
Route::get('/', 'Admin\IndexController@index');
// login
Route::get('login', 'Admin\LoginController@login');

Route::get('user', 'Admin\UserController@listUser');