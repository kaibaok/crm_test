<?php 

/* UserController------------------------------*/

// login
Route::get('login', 'Admin\UserController@login');
// index admin
Route::get('/', 'Admin\IndexController@index');