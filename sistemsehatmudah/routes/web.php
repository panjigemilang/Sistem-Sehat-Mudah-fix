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
    return view('pages/home');
});

Route::get('/about', function(){
    return view('pages/about');
});

Route::get('/index', function(){
    return view('pages/index');
});

Route::get('/coba', 'PostController@index');

Route::get('/profile', 'PostController@show');

Route::get('/search={idthread}+{kategori}', 'PostController@searchDetail');
 Route::get('/login', function(){
    return view('pages/hallogin');
});

Route::get('/newThread', function(){
    return view('pages/newThread');
});

Route::resource('posts', 'PostController');
