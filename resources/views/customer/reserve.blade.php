@extends('layouts.helloapp')

@section('title', 'customer.reserve');

@section('menubar')
  @parent
  予約画面
@section('content')
<form class="content" action="customer.home" method="post">
  @csrf
  <input type="button" value="カレンダー">
  <input type="number" value="人数">
  <input type="datetime" value="時間">
  <input type="button" value="確認">
  <input type="submit" value="予約">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
