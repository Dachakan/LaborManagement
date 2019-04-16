@extends('layouts.newtemp')

@section('title', 'メニュー｜Labor Management')

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
				@if($memberId == false)
					<li class="nav-item">
						<a class="nav-link h3 ml-5 mr-3" href="/labor/public/register/input">会員登録 <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link h3 ml-5 mr-3" href="/labor/public/login">ログイン <span class="sr-only">(current)</span></a>
					</li>
				@elseif($memberId == true)
					<li class="nav-item">
						<a href="/labor/public/logout" class="btn btn-lg" role="button">ログアウト</a>
						<!--<a class="nav-link h3" href="/labor/public/login">ログアウト</a>-->
					</li>
					<li class="nav-item">
						<p class="h3 pt-2 pl-5 text-primary text-right">ようこそ「{{$memberId}}」さん！</p>
					</li>
				@endif
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
	@if($memberId == true)
		<main>
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<h2 class="font-weight-bold">工事情報入力</h2>
						<p>ここから工事情報が入力できます。</p>
						<p>鉄筋・型枠・足場など、随時種類を増やしていく予定です。</p>
						<p><a class="btn btn-secondary" href="/labor/public/newConstruction/select" role="button">入力画面へ &raquo;</a></p>
					</div>
					<div class="col-md-6">
						<h2 class="font-weight-bold">工事情報検索</h2>
						<p>ここから工事情報を検索できます。</p>
						<p><a class="btn btn-secondary" href="/labor/public/construction/list" role="button">検索画面へ &raquo;</a></p>
					</div>
				</div>
				<hr>
			</div>
		</main>
	@elseif($memberId == false)
		<main role="main" class="inner cover text-center">
			<h1 class="cover-heading mb-4">Labor Managementへようこそ</h1>
			<p class="h4 mb-3">歩掛りの集計を<span class="h3 text-primary">簡潔</span>にしたい</p>
			<p class="h4 mb-3"><span class="h3 text-primary">他の現場の歩掛り</span>って大体どれくらい？</p>
			<p class="h4 mb-3">現場監督に<span class="h3 text-primary">標準歩掛りの暗記は必要ない</span></p>
			<p class="h4 mb-3">そんな<span class="h3 text-primary">声</span>を集めたサイトです</p>
		</main>
	@endif
	<footer class="text-center text-muted py-4">
		2019 Labor Management Company
	</footer>
@endsection