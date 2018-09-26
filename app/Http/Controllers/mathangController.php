<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;
use App\Model\LoaiMatHang;

class MatHangController extends Controller
{
	
	public function index_admin()
    {
        // for admin page
		$mathangs = MatHang::all();
		return view('admin/mathang/index',['mathangs' => $mathangs]);
    }
	public function create_admin()
    {
     	 //
		 $loaimathangs = LoaiMatHang::all();
		 return view('admin/mathang/create',['loaimathangs' => $loaimathangs]);
    }
	public function store_admin(Request $request)
    {
        $user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			return redirect('/admin/nguoidung');
		}
    }
	public function show_admin($id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		return view('admin/mathang/show',['user' => $user]);
    }
	public function edit_admin($id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		return view('admin/mathang/edit',['mathang' => $mathang]);
    }
	
	
	
	public function create()
    {
        //
		return view('user/create');
    }
	public function store(Request $request)
    {
        //
		$user = new User;
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$request['Role']=2;
			$request['Active']=0;
			$user = User::create(request([
				'username',
				'email', 
				'password',
				'HoVaTen', 
				'NgaySinh', 
				'SoDienThoai', 
				'GioiTinh', 
				'DiaChi', 
				'ThanhPho',
				'Quan',
				'Role',
				'Active'
			]));
			
			auth()->login($user);
			return redirect('/');
		}
    }
	public function show($id)
    {
        $mathang = MatHang::where('id','=',$id)->first();
		return view('/mathang/show',['mathang' => $mathang]);

    }
	public function edit($id)
    {
        //
    }
	public function update(Request $request, $id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		
		
		$validator = Validator::make($request->all(), $mathang->rules, $mathang->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$mathang->TenMatHang = $request['TenMatHang'];
			$mathang->Gia = $request['Gia'];
			$mathang->XuatXu = $request['XuatXu'];
			$mathang->SoLuongTon = $request['SoLuongTon'];
			$mathang->MoTa = $request['MoTa'];
			$mathang->idLoaiMatHang = $request['idLoaiMatHang'];



			$mathang->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$mathang = MatHang::where('id','=',$id)->first();
		$mathang->delete();
		return redirect()->back();
    }
}
