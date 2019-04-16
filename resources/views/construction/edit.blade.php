@extends('layouts.editemp')

@section('title', '工種情報編集｜Labor Management')

@section('content')
	@if($editItem->construction_work == 'rebar')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<div class="text-center mb-5">
		<p class="text-center h3 mb-3">以下より編集を行ってください</p>
		<form action="{{ url('construction/confirm') }}" method="POST">
			<p>{{ csrf_field() }}</p>
			<dl>
				<dt class="h4 py-3">鉄筋径：【前回入力データ：{{$editItem->conditions}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="conditions" value="D13以下" required>  D13以下</p>
					<p class="py-1"><input type="radio" name="conditions" value="D16以上" required>  D16以上</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">施工性：【前回入力データ：{{$editItem->workability}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="workability" value="良い">  施工性良い</p>
					<p class="py-1"><input type="radio" name="workability" value="悪い">  施工性悪い</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">1人1日何t組むことができたか：【前回入力データ：{{$editItem->performance}}t/人/日】</dt>
				<dd>
					<p class="py-2">実際かかった日数：<input class="form-control-sm" type="number" id="day" value=0>(単位：日）</p>
					<p class="py-2">実際かかった人数：<input class="form-control-sm" type="number" id="person" value=0>(単位：人）</p>
					<p class="py-2">実際組んだ鉄筋量：<input class="form-control-sm" type="text" id="amount" value=0>(単位：t）</p>
					<button type="button" class="btn btn-md btn-outline-info" id="submit">計算</button>
					<p class="py-2">歩掛り：<input class="form-control-sm" type="text" name="result" id="result" value=0>(単位：t/人/日）</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">備考：【前回入力データ：{{$editItem->remarks}}】</dt>
				<dd>
					<textarea class="form-control-lg" name="remarks"></textarea>
				</dd>
			</dl>
			<input class="btn btn-md btn-success" type="submit" value="登録">
			<input type="hidden"  name="_token" value="{{ csrf_token() }}">
			<a href="/labor/public/construction/list" class="btn btn-md btn-dark" role="button">検索画面に戻る</button>
		</form>
	</div>
	@elseif($editItem->construction_work == 'formwork')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<div class="text-center mb-5">
		<p class="text-center h3 mb-3">以下より編集を行ってください</p>
		<form action="{{ url('construction/confirm') }}" method="POST">
			<p>{{ csrf_field() }}</p>
			<dl>
				<dt class="h4 py-3">型枠形状：【前回入力データ：{{$editItem->conditions}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="conditions" value="一般型枠" required>  一般型枠</p>
					<p class="py-1"><input type="radio" name="conditions" value="円形型枠" required>  円形型枠</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">施工性：【前回入力データ：{{$editItem->workability}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="workability" value="良い">  施工性良い</p>
					<p class="py-1"><input type="radio" name="workability" value="悪い">  施工性悪い</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">1人1日何m2組むことができたか：【前回入力データ：{{$editItem->performance}}m2/人/日】</dt>
				<dd>
					<p class="py-2">実際かかった日数：<input class="form-control-sm" type="number" id="day" value=0>(単位：日）</p>
					<p class="py-2">実際かかった人数：<input class="form-control-sm" type="number" id="person" value=0>(単位：人）</p>
					<p class="py-2">実際組んだ型枠面積：<input class="form-control-sm" type="text" id="amount" value=0>(単位：m2）</p>
					<button type="button" class="btn btn-md btn-outline-info" id="submit">計算</button>
					<p class="py-2">歩掛り：<input class="form-control-sm" type="text" name="result" id="result" value=0>(単位：m2/人/日）</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">備考：【前回入力データ：{{$editItem->remarks}}】</dt>
				<dd><textarea class="form-control-lg" name="remarks"></textarea></dd>
			</dl>
			<input class="btn btn-md btn-success" type="submit" value="登録">
			<input type="hidden"  name="_token" value="{{ csrf_token() }}">
			<a href="/labor/public/construction/list" class="btn btn-md btn-dark" role="button">検索画面に戻る</button>
		</form>
	</div>
	@elseif($editItem->construction_work == 'formworkShoring')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<div class="text-center mb-5">
		<p class="text-center h3 mb-3">以下より編集を行ってください</p>
		<form action="{{ url('construction/confirm') }}" method="POST">
			<p>{{ csrf_field() }}</p>
			<dl>
				<dt class="h4 py-3">型枠支保工の形状：【前回入力データ：{{$editItem->conditions}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="conditions" value="パイプサポート" required>  パイプサポート</p>
					<p class="py-1"><input type="radio" name="conditions" value="くさび結合" required>  くさび結合</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">施工性：【前回入力データ：{{$editItem->workability}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="workability" value="良い">  施工性良い</p>
					<p class="py-1"><input type="radio" name="workability" value="悪い">  施工性悪い</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">1人1日何m3組むことができたか：【前回入力データ：{{$editItem->performance}}m3/人/日】</dt>
				<dd>
					<p class="py-2">実際かかった日数：<input class="form-control-sm" type="number" id="day" value=0>(単位：日）</p>
					<p class="py-2">実際かかった人数：<input class="form-control-sm" type="number" id="person" value=0>(単位：人）</p>
					<p class="py-2">実際組んだ型枠支保工：<input class="form-control-sm" type="text" id="amount" value=0>(単位：m3）</p>
					<button type="button" class="btn btn-md btn-outline-info" id="submit">計算</button>
					<p class="py-2">歩掛り：<input class="form-control-sm" type="text" name="result" id="result" value=0>(単位：m3/人/日）</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">備考：【前回入力データ：{{$editItem->remarks}}】</dt>
				<dd><textarea class="form-control-lg" name="remarks"></textarea></dd>
			</dl>
			<input class="btn btn-md btn-success" type="submit" value="登録">
			<input type="hidden"  name="_token" value="{{ csrf_token() }}">
			<a href="/labor/public/construction/list" class="btn btn-md btn-dark" role="button">検索画面に戻る</button>
		</form>
	</div>
	@elseif($editItem->construction_work == 'scaffold')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<div class="text-center mb-5">
		<p class="text-center h3 mb-3">以下より編集を行ってください</p>
		<form action="{{ url('construction/confirm') }}" method="POST">
			<p>{{ csrf_field() }}</p>
			<dl>
				<dt class="h4 py-3">足場形状：【前回入力データ：{{$editItem->conditions}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="conditions" value="単管足場" required>  単管足場</p>
					<p class="py-1"><input type="radio" name="conditions" value="くさび足場" required>  くさび足場</p>
					<p class="py-1"><input type="radio" name="conditions" value="枠組足場" required>  枠組足場</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">施工性：【前回入力データ：{{$editItem->workability}}】</dt>
				<dd>
					<p class="py-1"><input type="radio" name="workability" value="良い">  施工性良い</p>
					<p class="py-1"><input type="radio" name="workability" value="悪い">  施工性悪い</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">1人1日何m2組むことができたか：【前回入力データ：{{$editItem->performance}}m2/人/日】</dt>
				<dd>
					<p class="py-2">実際かかった日数：<input class="form-control-sm" type="number" id="day" value=0>(単位：日）</p>
					<p class="py-2">実際かかった人数：<input class="form-control-sm" type="number" id="person" value=0>(単位：人）</p>
					<p class="py-2">実際組んだ足場面積：<input class="form-control-sm" type="text" id="amount" value=0>(単位：m2）</p>
					<button type="button" class="btn btn-md btn-outline-info" id="submit">計算</button>
					<p class="py-2">歩掛り：<input class="form-control-sm" type="text" name="result" id="result" value=0>(単位：m2/人/日）</p>
				</dd>
			</dl>
			<dl>
				<dt class="h4 py-3">備考：【前回入力データ：{{$editItem->remarks}}】</dt>
				<dd><textarea class="form-control-lg" name="remarks"></textarea></dd>
			</dl>
			<input class="btn btn-md btn-success" type="submit" value="登録">
			<input type="hidden"  name="_token" value="{{ csrf_token() }}">
			<a href="/labor/public/construction/list" class="btn btn-mg btn-dark" role="button">検索画面に戻る</button>
		</form>
	</div>
	@endif
@endsection
