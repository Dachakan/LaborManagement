<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;

class LogController extends Controller
{
	public function login(){
		return view('login');
	}
	
	public function loginPost(Request $request) {
		$validate_rule = [
				'id' => 'required|alpha_dash',
				'pass' => 'required|alpha_dash'
			];
		$this->validate($request, $validate_rule);
		// login.blade.phpにて入力したidとpassと、データベースの値を比較。OKならmenu画面へ遷移、NGならloginへリダイレクト。
		$loginId = $request->get('id');
		// $loginPass = Hash::check($request->get('pass'));
		// echo $loginPass;
		$data = DB::table('members_table')->select('ID','PASS')->where('ID',$loginId)->get();
		// $data = DB::table('members_table')->select('ID','PASS')->where('PASS',$loginPass)->get();
		foreach($data as $d){
			if (Hash::check($request->get('pass'),$d->PASS)) {
				$request->session()->put('id', $request->get('id'));
				$memberId = $request->session()->get('id');
				return view('menu',compact('memberId'));
			}
		}
		return redirect('login');
	}
}
