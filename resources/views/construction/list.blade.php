@extends('layouts.contemp')

@section('title', '工種情報一覧｜Labor Management')

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
		<h2 class="mb-3 text-center">工事情報一覧</h2>
		<div class="p-3">
			<ul class="nav nav-tabs">
				<li class="nav-item"><a href="#tab1" class="nav-link active" data-toggle="tab">全て</a></li>
				<li class="nav-item"><a href="#tab2" class="nav-link" data-toggle="tab">鉄筋工</a></li>
				<li class="nav-item"><a href="#tab3" class="nav-link" data-toggle="tab">型枠工</a></li>
				<li class="nav-item"><a href="#tab4" class="nav-link" data-toggle="tab">型枠支保工</a></li>
				<li class="nav-item"><a href="#tab5" class="nav-link" data-toggle="tab">足場工</a></li>
			</ul>
			<section class="bg-light text-center py-5">
				<div class="tab-content">
					<div id="tab1" class="tab-pane active">
						<table class="table table-hover">
							<thead>
								<tr><th>工種</th><th>条件</th><th>施工性</th><th>歩掛り</th><th>備考</th><th>更新日</th><th>エディタ</th></tr>
							</thead>
							<tbody>
								@foreach ($items as $item)
								@php
									if($item->construction_work == 'rebar'){
										$work = '鉄筋工';
									} elseif ($item->construction_work == 'formwork'){
										$work = '型枠工';
									} elseif ($item->construction_work == 'formworkShoring'){
										$work = '型枠支保工';
									} elseif ($item->construction_work == 'scaffold'){
										$work = '足場工';
									} else {
										$work = '工種が見つかりません';
									}
								@endphp
									<tr>
										<td>{{$work}}</td>
										<td>{{$item->conditions}}</td>
										<td>{{$item->workability}}</td>
										<td>{{$item->performance}}</td>
										<td>{{$item->remarks}}</td>
										<td>{{$item->update_date}}</td>
										@if($item->member_id == $memberSelf)
										<td>
											<form action="{{ url('construction/edit') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-primary btn-sm" type="submit" name="editId" value="{{$item->id}}">編集</button>
											</form>
											<form action="{{ url('construction/eraser') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-danger btn-sm" type="submit" name="eraserId" value="{{$item->id}}">削除</button>
											</form>
										</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $items->render() !!}
					</div>
					<div id="tab2" class="tab-pane">
						<table class="table table-hover">
							<thead>
								<tr><th>工種</th><th>条件</th><th>施工性</th><th>歩掛り</th><th>備考</th><th>更新日</th><th>エディタ</th></tr>
							</thead>
							<tbody>
								@foreach ($rebarItems as $rebarItem)
								@php
									$work1 = $rebarItem->construction_work;
									$work1 = '鉄筋工';
								@endphp
									<tr>
										<td>{{$work1}}</td>
										<td>{{$rebarItem->conditions}}</td>
										<td>{{$rebarItem->workability}}</td>
										<td>{{$rebarItem->performance}}</td>
										<td>{{$rebarItem->remarks}}</td>
										<td>{{$rebarItem->update_date}}</td>
										@if($rebarItem->member_id == $memberSelf)
										<td>
											<form action="{{ url('construction/edit') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-primary btn-sm" type="submit" name="editId" value="{{$rebarItem->id}}">編集</button>
											</form>
											<form action="{{ url('construction/eraser') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-danger btn-sm" type="submit" name="eraserId" value="{{$rebarItem->id}}">削除</button>
											</form>
										</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $rebarItems->render() !!}
					</div>
					<div id="tab3" class="tab-pane">
						<table class="table table-hover">
							<thead>
								<tr><th>工種</th><th>条件</th><th>施工性</th><th>歩掛り</th><th>備考</th><th>更新日</th><th>エディタ</th></tr>
							</thead>
							<tbody>
								@foreach ($formworkItems as $formworkItem)
								@php
									$work2 = $formworkItem->construction_work;
									$work2 = '型枠工';
								@endphp
									<tr>
										<td>{{$work2}}</td>
										<td>{{$formworkItem->conditions}}</td>
										<td>{{$formworkItem->workability}}</td>
										<td>{{$formworkItem->performance}}</td>
										<td>{{$formworkItem->remarks}}</td>
										<td>{{$formworkItem->update_date}}</td>
										@if($formworkItem->member_id == $memberSelf)
										<td>
											<form action="{{ url('construction/edit') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-primary btn-sm" type="submit" name="editId" value="{{$formworkItem->id}}">編集</button>
											</form>
											<form action="{{ url('construction/eraser') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-danger btn-sm" type="submit" name="eraserId" value="{{$formworkItem->id}}">削除</button>
											</form>
										</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $formworkItems->render() !!}
					</div>
					<div id="tab4" class="tab-pane">
						<table class="table table-hover">
							<thead>
								<tr><th>工種</th><th>条件</th><th>施工性</th><th>歩掛り</th><th>備考</th><th>更新日</th><th>エディタ</th></tr>
							</thead>
							<tbody>
								@foreach ($formworkShoringItems as $formworkShoringItem)
								@php
									$work3 = $formworkShoringItem->construction_work;
									$work3 = '型枠支保工';
								@endphp
									<tr>
										<td>{{$work3}}</td>
										<td>{{$formworkShoringItem->conditions}}</td>
										<td>{{$formworkShoringItem->workability}}</td>
										<td>{{$formworkShoringItem->performance}}</td>
										<td>{{$formworkShoringItem->remarks}}</td>
										<td>{{$formworkShoringItem->update_date}}</td>
										@if($formworkShoringItem->member_id == $memberSelf)
										<td>
											<form action="{{ url('construction/edit') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-primary btn-sm" type="submit" name="editId" value="{{$formworkShoringItem->id}}">編集</button>
											</form>
											<form action="{{ url('construction/eraser') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-danger btn-sm" type="submit" name="eraserId" value="{{$formworkShoringItem->id}}">削除</button>
											</form>
										</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $formworkShoringItems->render() !!}
					</div>			
					<div id="tab5" class="tab-pane">
						<table class="table table-hover">
							<thead>
								<tr><th>工種</th><th>条件</th><th>施工性</th><th>歩掛り</th><th>備考</th><th>更新日</th><th>エディタ</th></tr>
							</thead>
							<tbody>
								@foreach ($scaffoldItems as $scaffoldItem)
								@php
									$work4 = $scaffoldItem->construction_work;
									$work4 = '足場工';
								@endphp
									<tr>
										<td>{{$work4}}</td>
										<td>{{$scaffoldItem->conditions}}</td>
										<td>{{$scaffoldItem->workability}}</td>
										<td>{{$scaffoldItem->performance}}</td>
										<td>{{$scaffoldItem->remarks}}</td>
										<td>{{$scaffoldItem->update_date}}</td>
										@if($scaffoldItem->member_id == $memberSelf)
										<td>
											<form action="{{ url('construction/edit') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-primary btn-sm" type="submit" name="editId" value="{{$scaffoldItem->id}}">編集</button>
											</form>
											<form action="{{ url('construction/eraser') }}" method="POST" style="display: inline">
												<p style="display: inline">{{ csrf_field() }}</p>
												<button class="btn btn-danger btn-sm" type="submit" name="eraserId" value="{{$scaffoldItem->id}}">削除</button>
											</form>
										</td>
										@endif
									</tr>
								@endforeach
							</tbody>
						</table>
						{!! $scaffoldItems->render() !!}
					</div>		
				</div>
			</section>
		</div>
	</main>
@endsection