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
    return view('auth/login');
});

Route::get('master', function () {
    return view('master');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('menuform', function () {
    return view('menuform');
});

Route::get('paketform', function () {
    return view('paketform');
});

Route::get('index', function () {
    return view('index');
});

Route::get('allmenu', function () {
    return view('allmenu');
});

Route::get('/logout','Auth\LoginController@logout');
Route::get('auth/login', 'Auth\LoginController@login');

Route::get('/allmenu','AllmenuController@index');
Route::get('/allmenu/tambah','AllmenuController@tambah');
Route::post('/allmenu/store','AllmenuController@store');
Route::get('/allmenu/edit/{id}','AllmenuController@edit');
Route::post('/allmenu/update','AllmenuController@update');

Route::get('/paket','PaketController@index');
Route::get('/paket/tambah','PaketController@tambah');
Route::post('/paket/store','PaketController@store');