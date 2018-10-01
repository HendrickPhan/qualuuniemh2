<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\LoaiMatHang;
use App\Model\MatHang;

class HomeController extends Controller
{
    //
	public function render(){
		
		$loaimathangs = LoaiMatHang::take(6)->get();
		$mathangs = MatHang::take(10)->get();
		return view('welcome',['loaimathangs' => $loaimathangs,'mathangs' => $mathangs]);
	}
}
