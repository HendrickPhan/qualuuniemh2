<?php

namespace App\Http\Controllers\Api;
use App\User;
use Auth;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MatHangController extends Controller
{
    //
	// public function get_all (Request $request) {
		// $response = $request->user();
		// return response($response, 200);
	// }
	public function get_all () {
		$response = 1;
		return response($response, 200);
	}
}
