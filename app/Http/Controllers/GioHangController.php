<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\MatHang;


class GioHangController extends Controller
{
    //
	public function show(){
		$data = session('Cart');
		$mathangs= [];
		if($data!=null){
			foreach($data as $product){
			
				$mathang =  MatHang::where('id','=',$product[0])->first();
				$mathang['SoLuong'] = $product[1];
				$mathang['ThanhTien'] = $product[1] * $mathang->Gia;
				$mathangs[] = $mathang;
			}
		}
		return view('cart',['mathangs' => $mathangs]);
	}
	
}
	
	

