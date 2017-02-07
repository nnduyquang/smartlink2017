<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('frontend.trangchu.index');
});

Route::get('/google-adwords', function () {
    return view('frontend.dvgoogleadwords.googleadwords');
});

Route::get('/thiet-ke-website', function () {
    return view('frontend.dvthietkeweb.thietkewebsite');
});
