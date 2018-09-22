<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class UserController extends Controller
{
    //
	public static function create(Request $request){
		$rules = [
    		'username' =>'required|min:4|unique:users,username',
    		'password' => 'required|min:4|confirmed',
			'email' => 'required|e-mail|unique:users,email',
			'HoVaTen' => 'required',
			'NgaySinh' => 'date|required',
			'SoDienThoai' => 'numeric|required', 
			'GioiTinh' => 'required',
			'DiaChi' => 'required',
			'ThanhPho' => 'required',
			'Quan' => 'required',
    	];
    	$messages = [
    		'username.required' => 'Tên đăng nhập là trường bắt buộc',
    		'username.min' => 'Tên đăng nhập phải chứa ít nhất 4 ký tự',
			'username.unique' =>'Tên đăng nhập đã được đăng ký',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
    		'password.confirmed' => 'Mật khẩu không khớp',
			'email.e-mail' => 'Email không hợp lệ',
			'email.required' => 'Email là trường bắt buộc',
			'email.unique' => 'Email đã được đăng ký',
			'HoVaTen.required' => 'HoVaTen là trường bắt buộc', 
			'NgaySinh.required' => 'NgaySinh là trường bắt buộc', 
			'NgaySinh.date' => 'NgaySinh là không hợp lệ', 
			'SoDienThoai.required' => 'SoDienThoai là trường bắt buộc', 
			'SoDienThoai.numberic' => 'SoDienThoai không hợp lệ', 
			'GioiTinh.required' => 'GioiTinh là trường bắt buộc', 
			'DiaChi.required' => 'DiaChi là trường bắt buộc', 
			'ThanhPho.required' => 'ThanhPho là trường bắt buộc',
			'Quan.required' => 'Quan là trường bắt buộc',
    	];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			return $user;
		}
		
	}
	public function update(Request $request){
		$rules = [
    		'username' =>'required|min:4|unique:users,username',
    		'password' => 'required|min:4|confirmed',
			'email' => 'required|e-mail|unique:users,email',
			'HoVaTen' => 'required',
			'NgaySinh' => 'date|required',
			'SoDienThoai' => 'numeric|required', 
			'GioiTinh' => 'required',
			'DiaChi' => 'required',
			'ThanhPho' => 'required',
			'Quan' => 'required',
    	];
    	$messages = [
    		'username.required' => 'Tên đăng nhập là trường bắt buộc',
    		'username.min' => 'Tên đăng nhập phải chứa ít nhất 4 ký tự',
			'username.unique' =>'Tên đăng nhập đã được đăng ký',
    		'password.required' => 'Mật khẩu là trường bắt buộc',
    		'password.min' => 'Mật khẩu phải chứa ít nhất 4 ký tự',
    		'password.confirmed' => 'Mật khẩu không khớp',
			'email.e-mail' => 'Email không hợp lệ',
			'email.required' => 'Email là trường bắt buộc',
			'email.unique' => 'Email đã được đăng ký',
			'HoVaTen.required' => 'HoVaTen là trường bắt buộc', 
			'NgaySinh.required' => 'NgaySinh là trường bắt buộc', 
			'NgaySinh.date' => 'NgaySinh là không hợp lệ', 
			'SoDienThoai.required' => 'SoDienThoai là trường bắt buộc', 
			'SoDienThoai.numberic' => 'SoDienThoai không hợp lệ', 
			'GioiTinh.required' => 'GioiTinh là trường bắt buộc', 
			'DiaChi.required' => 'DiaChi là trường bắt buộc', 
			'ThanhPho.required' => 'ThanhPho là trường bắt buộc',
			'Quan.required' => 'Quan là trường bắt buộc',
    	];
		$validator = Validator::make($request->all(), $rules, $messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			return $user;
		}
		
	}
	public function delete(Request $request){
	
	
	}
}
