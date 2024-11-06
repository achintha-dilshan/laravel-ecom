<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('web.pages.home.index');
});

Route::get('/shop', function () {
    return view('web.pages.shop.index');
});
