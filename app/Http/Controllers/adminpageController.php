<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class adminpageController extends Controller
{
    //
	public function QuanLyNguoiDung(){
		return view('admin/quanlynguoidung');
	}
}
