@extends('layout.app')

@section('content')
<form class="content" action="searchResult" method="post">
  @csrf
  <input type="text" value="店名検索" name="name">
  <input type="submit" value="送信">
  <input type="button" value="場所">
  <input type="button" value="ジャンル">
  <input type="button" value="値段">
  <input type="submit" value="検索">
</form>

@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
