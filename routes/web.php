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

Route::get('/forget_password', function () {
    return view('forget_password');
});

// routes xử lý login
Route::get('/login','LoginController@getLogin');
Route::post('login','LoginController@postLogin');

//xử lý logout
Route::get('/logout','LoginController@logout');

// Xử lý register
Route::get('/register', 'RegisterController@create');
Route::post('register', 'RegisterController@store');

// Xử lý mặt hàng
Route::get('/mathang', 'MatHangController@view_single_product');
Route::get('/admin/quanlynguoidung', 'adminpageController@QuanLyNguoiDung')
	->middleware('is_admin');
	
Route::get('/admin', 'adminpageController@Dashboard')
->middleware('is_admin');