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

//ROUTE TANPA CONTROLLER TARO SINI YA//

Route::get('/', function () {
    return view('public.home');
});

Route::get('/about', function () {
    return view('public.about');
});


//ROUTE TANPA CONTROLLER TARO SINI YA//