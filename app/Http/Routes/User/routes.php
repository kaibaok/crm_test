<?php

Route::get('/', 'User\IndexController@index');

// product
Route::any('/p/', 'User\ProductController@index');
Route::get('/pd/{id}/{seo_link}', 'User\ProductController@detail')->where(["id" => "[0-9]+","seo_link" => "[a-zA-Z 0-9]+"]);

// brand
Route::get('/b/', 'User\ProductController@brand');

// news
Route::get('/n/', 'User\NewsController@index');
Route::get('/nd/{id}/{seo_link}', 'User\NewsController@detail')->where(["id" => "[0-9]+","seo_link" => "[a-zA-Z 0-9]+"]);
