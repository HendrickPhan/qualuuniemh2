<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\Model\MatHang;
use App\Model\LoaiMatHang;



class SearchController extends Controller
{
	
	
	public function show(Request $request)
    {
		$name= $request['searchproduct'];
		$mathang = MatHang::where('TenMatHang','like',$name)->get();
        return view ('search');
    }

	
}
