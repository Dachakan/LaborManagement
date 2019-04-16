<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class NewConstructionController extends Controller
{
	public function select() {
		return view('newConstruction.select');
	}
	
	public function input(Request $request) {
		$constructionWork = $request->get('constructionWork');
		$request->session()->put('constructionWork', $constructionWork);
		return view('newConstruction.input', compact('constructionWork'));
	}
	
	public function confirm(Request $request) {
		$validate_rule = [
				'workability' => 'required',
				'result' => 'required|numeric',
			];
		$this->validate($request, $validate_rule);
		$request->session()->put('conditions', $request->get('conditions'));
		$request->session()->put('workability', $request->get('workability'));
		$request->session()->put('result', $request->get('result'));
		$request->session()->put('remarks', $request->get('remarks'));
		$memberId = $request->session()->get('id');
		$conditions = $request->get('conditions');
		$workability = $request->get('workability');
		$result = $request->get('result');
		$remarks = $request->get('remarks');
		$dt = Carbon::now()->timestamp;
        $time = Carbon::createFromTimestamp($dt)->format("Y/m/d H:i:s");
        $request->session()->put('time', $time);
		return view('newConstruction.confirm',compact('memberId','conditions','workability','result','remarks','time'));
	}
	
	public function complete(Request $request) {
		$param = [
			'memberId' => $request->session()->get('id'),
			'constructionWork' => $request->session()->get('constructionWork'),
			'conditions' => $request->session()->get('conditions'),
			'workability' => $request->session()->get('workability'),
			'result' => $request->session()->get('result'),
			'remarks' => $request->session()->get('remarks'),
			'createAt' => $request->session()->get('time'),
			'updateAt' => $request->session()->get('time')
		];
		DB::insert('insert into constructions_table(member_id, construction_work, conditions, workability, performance, remarks, create_date, update_date) values (:memberId, :constructionWork, :conditions, :workability, :result, :remarks, :createAt, :updateAt)', $param);
		return view('newConstruction.complete');
	}
}
