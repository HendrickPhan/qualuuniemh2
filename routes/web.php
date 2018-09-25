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



	
Route::get('/admin', 'adminpageController@Dashboard')
	->middleware('is_admin');
// Xử lý các thao tác với người dùng
Route::get('/admin/quanlynguoidung', 'adminpageController@QuanLyNguoiDung')
	->middleware('is_admin');
	
	
Route::get('/admin/xemnguoidung/{id}','adminpageController@XemNguoiDung')
	->middleware('is_admin');

Route::get('/admin/suanguoidung/{id}','adminpageController@SuaNguoiDung')
	->middleware('is_admin');
	
	
Route::post('/admin/suanguoidung/{id}','UserController@update')
	->middleware('is_admin');


// Xử lý mặt hàng ở front page
Route::get('/xemmathang/{id}', 'MatHangController@view_single_product');

//Xử lý mặt hàng ở admin page
Route::get('/admin/xemmathang/{id}','adminpageController@XemMatHang')
	->middleware('is_admin');
Route::get('/admin/quanlymathang', 'adminpageController@QuanLyMatHang')
	->middleware('is_admin');


