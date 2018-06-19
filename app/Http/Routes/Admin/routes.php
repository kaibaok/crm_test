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
Route::get('product/status/{id?}', 'Admin\ProductController@statusProduct');
Route::any('product/sort-product', 'Admin\ProductController@sortProduct');
Route::post('product/ajax-sort-product', 'Admin\ProductController@ajaxSortProduct');

// list cate product
Route::any('cate-product', 'Admin\ProductController@listCateProduct');
Route::any('cate-product/add', 'Admin\ProductController@addCateProduct');
Route::any('cate-product/edit/{id?}', 'Admin\ProductController@editCateProduct');
Route::get('cate-product/del/{id?}', 'Admin\ProductController@delCateProduct');
Route::get('cate-product/status/{id?}', 'Admin\ProductController@statusCateProduct');
// list type product
Route::any('type-product', 'Admin\ProductController@listTypeProduct');
Route::any('type-product/add', 'Admin\ProductController@addTypeProduct');
Route::any('type-product/edit/{id?}', 'Admin\ProductController@editTypeProduct');
Route::get('type-product/del/{id?}', 'Admin\ProductController@delTypeProduct');

// List Product
Route::any('colors', 'Admin\ProductController@listColors');
Route::any('colors/add', 'Admin\ProductController@addColors');
Route::any('colors/edit/{id?}', 'Admin\ProductController@editColors');
Route::get('colors/del/{id?}', 'Admin\ProductController@delColors');

// Cart Product
Route::any('product/cart', 'Admin\ProductController@listCart');
Route::any('product/cart/add', 'Admin\ProductController@addCart');

// tag
Route::any('tag', 'Admin\TagController@index');
Route::any('tag/add', 'Admin\TagController@addTag');
Route::any('tag/edit/{id?}', 'Admin\TagController@editTag');
Route::get('tag/del/{id?}', 'Admin\TagController@delTag');

// list type product
Route::any('item-product', 'Admin\ProductController@listItemProduct');
Route::any('item-product/add', 'Admin\ProductController@addItemProduct');
Route::any('item-product/edit/{id?}', 'Admin\ProductController@editItemProduct');
Route::get('item-product/del/{id?}', 'Admin\ProductController@delItemProduct');
Route::get('item-product/status/{id?}', 'Admin\ProductController@statusItemProduct');

// List Product
Route::any('news', 'Admin\NewsController@index');
Route::any('news/add', 'Admin\NewsController@add');
Route::any('news/edit/{id?}', 'Admin\NewsController@edit');
Route::get('news/del/{id?}', 'Admin\NewsController@del');
Route::get('news/status/{id?}', 'Admin\NewsController@status');
Route::any('news/sort-news', 'Admin\NewsController@sort');
Route::post('news/ajax-sort-news', 'Admin\NewsController@ajaxSort');

// cate news
Route::any('news-cate', 'Admin\NewsController@listNewsCate');
Route::any('news-cate/add', 'Admin\NewsController@addNewsCate');
Route::any('news-cate/edit/{id?}', 'Admin\NewsController@editNewsCate');
Route::get('news-cate/del/{id?}', 'Admin\NewsController@delNewsCate');
Route::get('news-cate/status/{id?}', 'Admin\NewsController@statusNewsCate');

// slider
Route::get('/slider', 'Admin\IndexController@slider');
Route::any('slider/add', 'Admin\IndexController@addSlider');
Route::any('slider/edit/{id?}', 'Admin\IndexController@editSlider');
Route::get('slider/del/{id?}', 'Admin\IndexController@delSlider');
Route::get('slider/status/{id?}', 'Admin\IndexController@statusSlider');

// home page
Route::any('home-page', 'Admin\IndexController@homePage');

// brand
Route::any('brand', 'Admin\ProductController@listBrand');
Route::any('brand/add', 'Admin\ProductController@addBrand');
Route::any('brand/edit/{id?}', 'Admin\ProductController@editBrand');
Route::get('brand/del/{id?}', 'Admin\ProductController@delBrand');
Route::get('brand/status/{id?}', 'Admin\ProductController@statusBrand');

// event
Route::any('event', 'Admin\IndexController@listEvent');
Route::any('event/add', 'Admin\IndexController@addEvent');
Route::any('event/edit/{id?}', 'Admin\IndexController@editEvent');
Route::get('event/del/{id?}', 'Admin\IndexController@delEvent');
Route::get('event/status/{id?}', 'Admin\IndexController@statusEvent');