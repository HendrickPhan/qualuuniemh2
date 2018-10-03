<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Ajax extends Controller
{
    //
	Public function AddToCart(Request $request, $idMatHang, $SoLuong = 1){
		$idMatHang =  $request['idMatHang'];
		$SoLuong =  (isset($request['SoLuong'])) ? $request['SoLuong'] : 1;
		$request->session()->push('Cart', [$idMatHang, $SoLuong]);
		
		return json_encode(session('Cart'));
	}

	
}
