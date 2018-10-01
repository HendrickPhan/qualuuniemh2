<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class LoaiMatHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$loaimathangs = LoaiMatHang::all();
		return view('admin/loaimathang/index',['loaimathangs' => $loaimathangs]);
    }
	public function store_admin(Request $request)
    {
        $loaimathang = new LoaiMatHang;
		$validator = Validator::make($request->all(), $loaimathang->rules, $loaimathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {			
			$loaimathang = LoaiMatHang::create(request([
				 'TenLoaiMatHang', 
			]));
			return redirect('/admin/loaimathang');
		}
    }
	public function edit_admin($id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		return view('admin/loaimathang/edit',['loaimathang' => $loaimathang]);
    }	
	public function create_admin()
    {
        //
		 $loaimathangs = LoaiMatHang::all();
		return view('loaimathang/create',['loaimathangs' => $loaimathangs]);
    }
	public function show_admin($id)
    {
        $loaimathang = LoaiMatHang::where('id','=',$id)->first();
		return view('/loaimathang/show',['loaimathang' => $loaimathang]);

    }
	public function update_admin(Request $request, $id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		
		
		$validator = Validator::make($request->all(), $loaimathang->rules, $loaimathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$loaimathang->TenLoaiMatHang = $request['TenLoaiMatHang'];
			$loaimathang->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$loaimathang = LoaiMatHang::where('id','=',$id)->first();
		$loaimathang->delete();
		return redirect()->back();
    }
}
