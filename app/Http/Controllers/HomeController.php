<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\LoaiMatHang;
use App\Model\MatHang;
use App\Model\HinhAnh;
class HomeController extends Controller
{
    //
	public function render(){
		
		$loaimathangs = LoaiMatHang::take(6)->get();
					$_mathangs = [];
			$hinhanhs =[];
		foreach($loaimathangs as $index => $loaimathang){
			$_mathang = [];
			$hinhanh =[];
			$_mathang = MatHang::where('idLoaiMatHang',$loaimathang->id)->first();
			$hinhanh = HinhAnh::where([['idContainer',$_mathang['id']],['type','mathang']])->first();
			$hinhanhs[] = $hinhanh;
			$loaimathangs[$index]['hinhAnh']  = $hinhanh['URL'];
			
		}
		
		
		$mathangs = MatHang::take(10)->get();
		return view('welcome',['loaimathangs' => $loaimathangs,'mathangs' => $mathangs]);
	}
}
