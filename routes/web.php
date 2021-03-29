<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Cahya Bagus Sanjaya (200769040027)';
});

Route::get('/home', function () {
    return view('home');
});

Route::post('/home', function (Request $request) {
    return $request;
});
