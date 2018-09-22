<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use Illuminate\Support\MessageBag;
use App\User;

class RegisterController extends Controller
{
    //
	public function create(){
		return view('register');
		
	}
	
	public function store(Request $request){
			$user = UserController::create($request);
			auth()->login($user);
        
			return redirect('/');
	}
}
