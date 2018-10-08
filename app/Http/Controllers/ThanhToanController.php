<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class ThanhToanController extends Controller
{
    //
	public function show(Request $request){
		$id = Auth::user()->id;
		if($id){
			$user = User::where('id','=',$id)->first();
		}
		else{
			$user = null;
		}
		
		return view('checkout',['user' => $user]);
	}
}
