<?php

Auth::routes();
Route::get('/admin-login', function () {
    return view('adminpanel.index');
});
Route::get('/', function () {
    return view('web.index');
});
Route::get('/user_panel', function () {
    return view('web.user_panel');
});
// Route::get('/add-product', function () {
//     return view('adminpanel.add_product');
// });
Route::get('/invoice', function () {
    return view('adminpanel.invoice');
});
Route::get('/new-order', function () {
    return view('adminpanel.new_order');
});
Route::get('/payment', function () {
    return view('adminpanel.payment');
});

// Route::post('product_image','ProductImageController@store');

// Route::post('/product-image', function () {
//     return view('adminpanel.payment');
// });


Route::resource('product','ProductController');
Route::resource('cart','CartController');
Route::resource('shop','ShopController');
Route::resource('product-image','ProductImageController');



Route::get('/home', 'HomeController@index')->name('home');
