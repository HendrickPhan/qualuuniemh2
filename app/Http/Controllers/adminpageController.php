<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
class adminpageController extends Controller
{
    //
	public function QuanLyNguoiDung(){
		$users = User::where('role','=','2')->get();
		return view('admin/quanlynguoidung',['users' => $users]);
	}
	public function Dashboard(){
		return view('admin/dashboard');
	}
}
