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

Route::get('index', function () {
    return view('index');
});

Route::get('/logout','\App\Htpp\Controllers\Auth\LoginController@logout');


Route::get('/logout','Auth\LoginController@logout');
Route::get('auth/login', 'Auth\LoginController@login');

Route::get('allmenu','AllmenuController@index');
Route::get('allmenu/tambah','AllmenuController@tambah');
Route::post('allmenu/store','AllmenuController@store');
Route::get('allmenu/edit/{id}','AllmenuController@edit');
Route::post('allmenu/update','AllmenuController@update');
Route::get('allmenu/hapus/{id}','AllmenuController@hapus');

Route::get('order','OrderController@index');
Route::get('order/tambah','OrderController@tambah');
Route::post('order/store','OrderController@store');
Route::get('order/edit/{id}','OrderController@edit');
Route::post('order/update','OrderController@update');
Route::get('order/hapus/{id}','OrderController@hapus');

Route::get('transaction','TransactionController@index');
Route::get('transaction/tambah','TransactionController@tambah');
Route::post('transaction/store','TransactionController@store');
Route::get('transaction/edit/{id}','TransactionController@edit');
Route::post('transaction/update','TransactionController@update');
Route::get('transaction/hapus/{id}','TransactionController@hapus');

Route::get('detail','DetailController@index');
Route::get('detail/tambah','DetailController@tambah');
Route::post('detail/store','DetailController@store');
Route::get('detail/edit/{id}','DetailController@edit');
Route::post('detail/update/{id}','DetailController@update');
Route::get('detail/hapus/{id}','DetailController@hapus');