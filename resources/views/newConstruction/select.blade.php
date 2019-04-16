@extends('layouts.newtemp')

@section('title', '工種情報選択｜Labor Management')

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
				<li class="nav-item">
					<a class="nav-link h3" href="/labor/public/login">ログアウト</a>
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
	<main>
	    <form action="{{ url('newConstruction/input') }}" method="POST">
		<p>{{ csrf_field() }}</p>
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<h1 class="h3 font-weight-bold">鉄筋工</h1>
					<p>ある条件下において、どれだけ鉄筋が組めるか</p>
					<button class="btn btn-lg btn-secondary" type="submit" name="constructionWork" value="rebar">鉄筋工を選択 &raquo;</button>
				</div>
				<div class="col-md-3">
					<h1 class="h3 font-weight-bold">型枠工</h1>
					<p>ある条件下において、どれだけ型枠が組めるか</p>
					<button class="btn btn-lg btn-secondary" type="submit" name="constructionWork" value="formwork">型枠工を選択 &raquo;</button>
				</div>
				<div class="col-md-3">
					<h1 class="h3 font-weight-bold">型枠支保工</h1>
					<p>ある条件下において、どれだけ型枠支保工が組めるか</p>
					<button class="btn btn-lg btn-secondary" type="submit" name="constructionWork" value="formworkShoring">型枠支保工を選択 &raquo;</button>
				</div>
				<div class="col-md-3">
					<h1 class="h3 font-weight-bold">足場工</h1>
					<p>ある条件下において、どれだけ足場が組めるか</p>
					<button class="btn btn-lg btn-secondary" type="submit" name="constructionWork" value="scaffold">足場工を選択 &raquo;</button>
				</div>
			</div>
			<hr>
		</div>
		</form>
	</main>
	<footer class="text-center text-muted py-4">
		2019 Labor Management Company
	</footer>
@endsection