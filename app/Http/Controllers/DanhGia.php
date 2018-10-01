<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class DanhGiaController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$danhgias = DanhGia::all();
		return view('admin/danhgia/index',['danhgias' => $danhgias]);
    }
	public function show_admin($id)
    {
        $danhgia = DanhGia::where('id','=',$id)->first();
		return view('/danhgia/show',['danhgia' => $danhgia]);

    }
	public function destroy($id)
    {
        //
		$danhgia = DanhGia::where('id','=',$id)->first();
		$danhgia->delete();
		return redirect()->back();
    }
}
