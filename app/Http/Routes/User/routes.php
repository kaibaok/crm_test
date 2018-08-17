<?php

Route::get('/', 'User\IndexController@index');

// product
Route::any('/p/', 'User\ProductController@index');
Route::any('/pd/{id}/{seo_link}', 'User\ProductController@detail')->where(["id" => "[0-9]+","seo_link" => "[a-zA-Z 0-9]+"]);

// brand
Route::get('/b/', 'User\ProductController@brand');

// news
Route::get('/n/', 'User\NewsController@index');
Route::get('/nd/{id}/{seo_link}', 'User\NewsController@detail')->where(["id" => "[0-9]+","seo_link" => "[a-zA-Z 0-9]+"]);

Route::any('/them-san-pham', 'User\ProductController@addCart');
Route::any('/gio-hang', 'User\ProductController@cart');
Route::any('/don-hang', 'User\ProductController@checkout');
Route::get('/hoan-tat-don-hang', 'User\ProductController@orderCart');


Route::any('/dang-nhap', 'User\UserController@login');
Route::any('/dang-ky', 'User\UserController@register');

Route::any('/profile', 'User\UserController@profile');
Route::get('/logout', 'User\UserController@logout');