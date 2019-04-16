@extends('layouts.regtemp')

@section('title','変更内容確認｜Labor Management')


@section('content')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<form class="form-signin" action="{{ url('construction/complete') }}" method="POST">
		<p>{{ csrf_field() }}</p>
		<h1 class="h3 mb-3 font-weight-normal">変更内容確認</h1>
		<h2 class="h4 mb-3 font-weight-normal">内容を確認してください</h2>
		<h2 class="h5 mb-3 font-weight-normal">条件：{{$conditions}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">施工性：{{$workability}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">歩掛り：{{$result}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">備考：{{$remarks}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">更新日時：{{$time}}</h2>
		<button class="btn btn-lg btn-primary" type="submit">変更完了</button>
		<a href="/labor/public/construction/edit" class="btn btn-lg btn-dark" role="button">もう一度入力</a>
	</form>
@endsection