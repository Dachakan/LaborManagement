@extends('layouts.regtemp')

@section('title','会員登録｜Labor Management')

@section('content')
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample08" aria-controls="navbarsExample08" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample08">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link h3 mr-5" href="/labor/public/menu">トップページ <span class="sr-only">(current)</span></a>
				</li>
			</ul>
		</div>
	</nav>
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<form class="form-signin" action="{{ url('register/confirm') }}" method="POST">
		<p>{{ csrf_field() }}</p>
		<h1 class="h3 mb-3 font-weight-normal">会員登録フォーム</h1>
		@if ($errors->has('name'))
			<h2 class="h6 mb-2 font-weight-normal">ニックネーム：エラーがあります</h2>
		@endif
		<label for="inputEmail" class="sr-only">name</label>
		<h2 class="h5 mb-3 font-weight-normal">ニックネーム<input type="text" id="inputEmail" class="form-control" placeholder="ニックネームを入力" name="name" required autofocus></h2>
		@if ($errors->has('id'))
			<h2 class="h6 mb-2 font-weight-normal">ID：エラーがあります</h2>
		@endif
		<label for="inputEmail" class="sr-only">ID</label>
		<h2 class="h5 mb-3 font-weight-normal">ID<input type="text" id="inputEmail" class="form-control" placeholder="IDを入力" name="id" required></h2>
		@if ($errors->has('pass'))
			<h2 class="h6 mb-2 font-weight-normal">パスワード：エラーがあります</h2>
		@endif
		<label for="inputPassword" class="sr-only">Password</label>
		<h2 class="h5 mb-3 font-weight-normal">パスワード<input type="password" id="inputPassword" class="form-control" placeholder="パスワードを入力" name="pass" required></h2>
		<button class="btn btn-lg btn-primary btn-block" type="submit">登録</button>
	</form>
@endsection