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

Route::get('/', 'PostController@index');

Route::get('/home', 'PostController@indexloggedin');

Route::get('/profile={idthread}', 'PostController@show');

Route::get('/kategori', 'PostController@search');

Route::get('/destroy={idthread}', 'PostController@destroy');

Route::get('/search', 'PostController@search');

Route::get('/search={idthread}+{kategori}', 'PostController@searchDetail');

Route::get('/login', function(){
    return view('pages/hallogin');
});

Route::get('/newThread', function(){
    return view('pages/newThread');
});

Route::post('', 'PostController@sistemlogin');

Route::get('/logout', 'PostController@logout');
