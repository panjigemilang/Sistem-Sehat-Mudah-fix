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

Route::get('/about', function(){
    return view('pages/about');
});

Route::get('/index', function(){
    return view('pages/index');
});

Route::get('/search', 'PostController@search');

Route::get('/search={idthread}+{kategori}', 'PostController@searchDetail');

Route::get('/login', function(){
    return view('pages/hallogin');
});

Route::get('/register', function(){
    return view('pages/register');
});

Route::resource('posts', 'PostController');

Route::get('/newThread', function(){
    return view('pages/newThread');
});

Route::POST('/bisa', 'PostController@newThread');

// Route::get('/sistemlogin', function(){
//     return view('pages/sistemlogin');
// });

Route::resource('posts', 'PostController');

Route::POST('/bmi', 'PostController@bmi');

Route::POST('/sistemlogin', 'PostController@sistemlogin');