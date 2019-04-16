<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class ConstructionController extends Controller
{
	public function list(Request $request) {
		// $items = DB::select('select * from constructions_table order by update_date desc'); こっちでもOK(一応)
		$memberSelf = $request->session()->get('id');
		$items = DB::table('constructions_table')->orderBy('update_date', 'desc')->paginate(10);
		$rebarItems = DB::table('constructions_table')->where('construction_work','rebar')->orderBy('update_date', 'desc')->paginate(10);
		$formworkItems = DB::table('constructions_table')->where('construction_work','formwork')->orderBy('update_date', 'desc')->paginate(10);
		$formworkShoringItems = DB::table('constructions_table')->where('construction_work','formworkShoring')->orderBy('update_date', 'desc')->paginate(10);
		$scaffoldItems = DB::table('constructions_table')->where('construction_work','scaffold')->orderBy('update_date', 'desc')->paginate(10);
		return view('construction.list',compact('memberSelf','items','rebarItems','formworkItems','formworkShoringItems','scaffoldItems'));
	}

	public function edit(Request $request) {
		$editId = $request->get('editId');
		$request->session()->put('editId', $request->get('editId'));
		$editItem = DB::table('constructions_table')->find($editId);
		$request->session()->forget(['conditions', 'workability', 'result', 'remarks', 'time']);
		return view('construction.edit',compact('editId','editItem'));
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
		return view('construction.confirm',compact('memberId','conditions','workability','result','remarks','time'));
	}
	
	public function complete(Request $request) {
		$request->session()->get('editId');
		DB::table('constructions_table')->where('id',$request->session()->get('editId'))->update([
			'conditions' => $request->session()->get('conditions'),
			'workability' => $request->session()->get('workability'),
			'performance' => $request->session()->get('result'),
			'remarks' => $request->session()->get('remarks'),
			'update_date' => $request->session()->get('time')
		]);
		return view('construction.complete');
	}
	
	public function eraser(Request $request) {
		$eraserId = $request->get('eraserId');
		$request->session()->put('eraserId', $request->get('eraserId'));
		$eraserItem = DB::table('constructions_table')->find($eraserId);
		return view('construction.eraser',compact('eraserId','eraserItem'));
	}
	
	public function eraserComp(Request $request) {
		$request->session()->get('eraserId');
		DB::table('constructions_table')->where('id',$request->session()->get('eraserId'))->delete();
		return view('construction.eraserComp');
	}

}
