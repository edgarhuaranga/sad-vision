<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('upload');
});

Route::get('/panel', function () {
    return view('panel');
});

Route::get('/photos', 'App\Http\Controllers\MultimediaItemController@index');

Route::post('/photo', 'App\Http\Controllers\MultimediaItemController@store');
