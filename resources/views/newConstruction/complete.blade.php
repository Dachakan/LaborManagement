@extends('layouts.regtemp')

@section('title','工事情報登録完了｜Labor Management')

@section('content')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<form class="form-signin" action="{{ url('menu') }}" method="GET">
		<p>{{ csrf_field() }}</p>
		<h1 class="h3 mb-3 font-weight-normal">工事情報登録完了</h1>
		<h2 class="h4 mb-3 font-weight-normal">メニュー画面へ戻る</h2>
		<a href="/labor/public/menu" class="btn btn-lg btn-primary" role="button">Labor Management</button>
	</form>
@endsection