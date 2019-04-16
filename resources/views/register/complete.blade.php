@extends('layouts.regtemp')

@section('title','登録完了｜Labor Management')

@section('content')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<form class="form-signin" action="{{ url('login') }}" method="GET">
		<p>{{ csrf_field() }}</p>
		<h1 class="h3 mb-3 font-weight-normal">登録完了</h1>
		<h2 class="h4 mb-3 font-weight-normal">サービスをご利用ください</h2>
		<a href="/labor/public/login" class="btn btn-lg btn-primary" role="button">Labor Management</button>
	</form>
@endsection