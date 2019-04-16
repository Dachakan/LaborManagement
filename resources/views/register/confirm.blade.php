@extends('layouts.regtemp')

@section('title','登録情報確認｜Labor Management')

@section('content')
	<header>
		<div class="jumbotron">
			<div class="container">
				<h1 class="display-3">Labor Management</h1>
				<p class="h4">現場監督のための労務管理ツール</p>
			</div>
		</div>
	</header>
	<form class="form-signin" action="{{ url('register/complete') }}" method="POST">
		<p>{{ csrf_field() }}</p>
		<h1 class="h3 mb-3 font-weight-normal">登録内容確認</h1>
		<h2 class="h4 mb-3 font-weight-normal">以下の内容でよろしいですか？</h2>
		<h2 class="h5 mb-3 font-weight-normal">ニックネーム：{{$name}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">ID：{{$id}}</h2>
		<h2 class="h5 mb-3 font-weight-normal">パスワード：「表示しません」</h2>
		<button class="btn btn-lg btn-primary" type="submit">確認完了</button>
		<a href="/labor/public/register/input" class="btn btn-lg btn-dark" role="button">もう一度入力</button>
	</form>
@endsection