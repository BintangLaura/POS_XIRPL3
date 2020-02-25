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
    return view('welcome');
});

//route
Route::get('hello', function () {
	echo '<h1>Hello Laravel</h1>';
});

//route passing views
Route::get('belajar', function () {
	return view('belajar');
});

//route to controller
//route siswa controller ke function index
Route::get('siswa','SiswaController@index');

Route::get('dosen','DosenController@index');

Route::get('blog','BlogController@index');
Route::get('blog/about','BlogController@about');
Route::get('blog/contact','BlogController@contact');

//route kategori
Route::resource('category', 'CategoryController');
Route::resource('product', 'ProductController');
Route::resource('customer', 'CustomerController');
Route::resource('order', 'OrderController');
Route::resource('orderdetail', 'OrderDetailController');