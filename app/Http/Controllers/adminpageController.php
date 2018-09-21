<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\model\product;
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
	public function QuanLyMatHang(){
		$products = Product::table('product')->select('TenMatHang','Gia','XuatXu','SoLuongTon')->get();
		return view('admin/quanlymathang',['product' => $product]);
	}
	public function XemMatHang($id){
		$products = Product::where('id','=',$id)->first();
		return view('admin/mathang',['product' => $product, 'action'=>'view']);
	}
	
}
