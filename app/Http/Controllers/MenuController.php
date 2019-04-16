<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class MenuController extends Controller
{
	public function menu(Request $request) {
		$memberId = $request->session()->get('id'); //add 0406
		return view('menu', compact('memberId'));
	}

	public function logout(Request $request) {
		$memberId = '';
		$request->session()->forget('id');
		$request->session()->flush();
		return redirect('/login');
	}
}
