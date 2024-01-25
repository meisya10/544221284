<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('login');
});
Route::get('/masuk', function () {
    return view('masuk');
});
Route::get('/main', function () {
    return view('main');
});