<?php

Route::get('/', 'User\IndexController@index');
Route::any('/p/{seo_link}', 'User\ProductController@detail')->where("seo_link","[a-z]+");