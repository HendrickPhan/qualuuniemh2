<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

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
		 return view('admin/mathang/create');
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
		$email = $request['email'];
		if($user->email == $request['email']){
			unset($request['email']);	
		}

		$user->rules['email'] = 'e-mail|unique:users,email';
		unset($user->rules['username']);
		unset($user->rules['password']);
		
		
		$validator = Validator::make($request->all(), $user->rules, $user->messages);
		if ($validator->fails()) {
    		return redirect()->back()->withErrors($validator)->withInput();
    	} else {
			$user->email = $email;
			$user->HoVaTen = $request['HoVaTen'];
			$user->NgaySinh = $request['NgaySinh'];
			$user->SoDienThoai = $request['SoDienThoai'];
			$user->GioiTinh = $request['GioiTinh'];
			$user->DiaChi = $request['DiaChi'];
			$user->ThanhPho = $request['ThanhPho'];
			$user->Quan = $request['Quan'];


			$user->save();
			return redirect()->back();
		}
    }
	public function destroy($id)
    {
        //
		$user = User::where('id','=',$id)->first();
		$user->delete();
		return redirect()->back();
    }
}
