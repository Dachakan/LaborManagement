@extends('layouts.regtemp')

@section('title','削除確認｜Labor Management')

@section('content')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<form class="form-signin" action="{{ url('construction/eraserComp') }}" method="POST">
		<p>{{ csrf_field() }}</p>
		@php
			if($eraserItem->construction_work == 'rebar'){
				$work = '鉄筋工';
			} elseif ($eraserItem->construction_work == 'formwork'){
				$work = '型枠工';
			} elseif ($eraserItem->construction_work == 'formworkShoring'){
				$work = '型枠支保工';
			} elseif ($eraserItem->construction_work == 'scaffold'){
				$work = '足場工';
			} else {
				$work = '工種が見つかりません';
			}
		@endphp
		<h1 class="h3 mb-3 font-weight-normal">削除内容確認</h1>
		<h2 class="h4 mb-3 font-weight-normal">内容を確認してください</h2>
		<h2 class="h5 mb-3 font-weight-normal">工種：{{$work}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">条件：{{$eraserItem->conditions}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">施工性：{{$eraserItem->workability}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">歩掛り：{{$eraserItem->performance}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">備考：{{$eraserItem->remarks}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">更新日時：{{$eraserItem->update_date}}</h2>
		<button class="btn btn-lg btn-primary" type="submit">削除</button>
		<a href="/labor/public/construction/list" class="btn btn-lg btn-dark" role="button">検索画面に戻る</a>
	</form>
@endsection