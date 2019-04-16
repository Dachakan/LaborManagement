<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
	public function input() {
		return view('register.input');
	}
	
	public function post(Request $request) {
		$validate_rule = [
				'name' => 'required|alpha_dash',
				'id' => 'required|alpha_dash|unique:members_table,ID',
				'pass' => 'required|alpha_dash'
			];
		$this->validate($request, $validate_rule);
		$request->session()->put('name', $request->input('name'));
		$request->session()->put('id', $request->input('id'));
		$request->session()->put('pass', Hash::make($request->input('pass')));
		$name = $request->get('name');
		$id = $request->get('id');
		$pass = $request->get('pass');
		// $data = $request->all();
		return view('register.confirm',compact('name','id','pass'));
	}
	
	public function confirm(Request $request) {
		$param = [
			'name' => $request->session()->get('name'),
			'id' => $request->session()->get('id'),
			'pass' => $request->session()->get('pass')
		];
		DB::insert('insert into members_table(name, id, pass) values (:name, :id, :pass)', $param);
		return view('register.complete');
	}
}
