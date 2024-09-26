<?php

use App\Http\Controllers\MyController;

Route::get('/', function () {
    return view('index'); // Loads home.blade.php
});
Route::get('/benefits', function () {
    return view('benefits'); // Loads about.blade.php
});
Route::get('/cart', function () {
    return view('cart'); // Loads about.blade.php
});
Route::get('/content', function () {
    return view('content'); // Loads about.blade.php
});
Route::get('/store', function () {
    return view('store'); // Loads about.blade.php
});
