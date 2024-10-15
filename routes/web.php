<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.index');
});

Route::get('/team/ebby-bright-addai', function () {
    return view('front.ebby');
});

Route::get('/team/john-kirimi', function () {
    return view('front.john');
});


Route::get('/team/sagar-brahmbhatt', function () {
    return view('front.sagar');
});

