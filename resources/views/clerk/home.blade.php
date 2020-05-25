@extends('layout.app')

@section('title', 'Shop.home')
@section('menubar')
  @parent
  ホーム・ページ
@endsection

@section('content')
<a href="http://localhost:8000/clerk/{{$id}}/searchReserve">確認</a>
<a href="http://localhost:8000/clerk/{{$id}}/shopCreate">登録</a>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
