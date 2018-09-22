<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Model\MatHang;


class adminpageController extends Controller
{
	public function Dashboard(){
		return view('admin/dashboard');
	}
    //
	public function QuanLyNguoiDung(){
		$users = User::where('role','=','2')->get();
		return view('admin/quanlynguoidung',['users' => $users]);
	}
	public function XemNguoiDung($id){
		$user = User::where('id','=',$id)->first();
		return view('admin/nguoidung',['user' => $user, 'action'=>'view']);
	}
	public function SuaNguoiDung($id){
		$user = User::where('id','=',$id)->first();
		return view('admin/nguoidung',['user' => $user, 'action'=>'edit']);
	}
	public function SuaThongTinNguoiDung($id){
		$user = User::where('id','=',$id)->first();
		
		
		
		
		return view('admin/nguoidung',['user' => $user, 'action'=>'view']);
	}

	public function QuanLyMatHang(){
		$MatHangs = MatHang::all();
		return view('admin/quanlymathang',['MatHangs' => $MatHangs, 'action'=>'view']);
	}
	public function XemMatHang($id){
		$MatHang = MatHang::where('id','=',$id)->first();
		return view('admin/mathang',['product' => $product, 'action'=>'view']);
	}
	
	
}
