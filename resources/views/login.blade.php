<!doctype html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="{{asset('css/app.css')}}">
		<link rel="stylesheet" href="{{asset('css/sign.css')}}">
		<title>ログイン｜Labor Management</title>
	</head>
	<body>
		<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
		</header>
		<form class="form-signin" action="{{ url('menu') }}" method="POST">
			<p>{{ csrf_field() }}</p>
			<h1 class="h3 mb-3 font-weight-normal">ログインフォーム</h1>
			<!--@if ($errors->has('id'))-->
			<!--	<h2 class="h6 mb-2 font-weight-normal">ID：エラーがあります</h2>-->
			<!--@endif-->
			<label for="inputEmail" class="sr-only">ID</label>
			<h2 class="h5 mb-3 font-weight-normal">ID<input type="text" id="inputEmail" class="form-control" placeholder="IDを入力" name="id" required autofocus></h2>
			<!--@if ($errors->has('pass'))-->
			<!--	<h2 class="h6 mb-2 font-weight-normal">パスワード：エラーがあります</h2>-->
			<!--@endif-->
			<label for="inputPassword" class="sr-only">Password</label>
			<h2 class="h5 mb-3 font-weight-normal">パスワード<input type="password" id="inputPassword" class="form-control" placeholder="パスワードを入力" name="pass" required></h2>
			<button class="btn btn-lg btn-primary btn-block" type="submit">ログイン</button>
		</form>
	</body>
</html>
