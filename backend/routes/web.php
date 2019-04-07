<?php


Route::get('/', function () {
    return view('adminpanel.index');
});
Route::get('/add-product', function () {
    return view('adminpanel.add_product');
});
Route::get('/invoice', function () {
    return view('adminpanel.invoice');
});
Route::get('/new-order', function () {
    return view('adminpanel.new_order');
});
Route::get('/payment', function () {
    return view('adminpanel.payment');
});

Route::resource('product','ProductController');