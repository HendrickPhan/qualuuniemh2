<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;
use App\Model\DonHang;

class DonHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$donhangs = DonHang::all();
		return view('admin/donhang/index',['donhangs' => $donhangs]);
    }
	public function create_admin()
    {
     	 //
		 
		$donhangs = DonHang::all();
		 return view('admin/donhang/create',['donhangs' => $donhangs]);
    }
	public function store_admin(Request $request)
    {
        $donhang = new DonHang;
		$validator = Validator::make($request->all(), $donhang->rules, $donhang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$donhang = DonHang::create(request([
				'NgayDatHang',
				'NgayGiaoHang',
				'idChiTietDonHang',
				'idNguoiDung',
				'ThanhTien',
				'PhuongThucThanhToan',
				'PhuongThucGiaoTien',
			]));			
			return redirect('/admin/donhang');
		}
    }
	public function show_admin($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		return view('admin/donhang/show',['donhang' => $donhang]);
    }
	public function edit_admin($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		return view('admin/donhang/edit',['donhang' => $donhang]);
    }	
	public function update_admin(Request $request, $id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		
		
		$validator = Validator::make($request->all(), $donhang->rules, $donhang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$donhang->NgayDatHang = $request['NgayDatHang'];
			$donhang->NgayGiaoHang = $request['NgayGiaoHang'];
			$donhang->idChiTietDonHang = $request['idChiTietDonHang'];
			$donhang->idNguoiDung = $request['idNguoiDung'];
			$donhang->ThanhTien = $request['ThanhTien'];
			$donhang->PhuongThucThanhToan = $request['PhuongThucThanhToan'];
			$donhang->PhuongThucGiaoTien = $request['PhuongThucGiaoTien'];
			$donhang->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$donhang = DonHang::where('id','=',$id)->first();
		$donhang->delete();
		return redirect()->back();
    }
}
