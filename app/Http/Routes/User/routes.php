<?php

Route::get('/', 'User\IndexController@index');
// product
Route::any('/p/', 'User\ProductController@index');
Route::get('/pd/{id}/{seo_link}', 'User\ProductController@detailProduct')->where(["id" => "[0-9]+","seo_link" => "[a-zA-Z]+"]);

// brand
Route::get('/b/', 'User\ProductController@listBrand');
Route::get('/bd/{id}/{seo_link}', 'User\ProductController@listBrand')->where(["id" => "[0-9]+","seo_link" => "[a-zA-Z]+"]);