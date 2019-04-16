@extends('layouts.newtemp')

@section('title', '工種情報入力｜Labor Management')

@section('content')
    @if($constructionWork === 'rebar')
        @include('inc.rebar')
    @elseif($constructionWork === 'formwork')
        @include('inc.formwork')
    @elseif($constructionWork === 'formworkShoring')
        @include('inc.formworkShoring')
    @elseif($constructionWork === 'scaffold')
        @include('inc.scaffold')
    @else
        error
    @endif
@endsection

