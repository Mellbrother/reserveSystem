@extends('layout.app')

@section('title', 'Reserve.create')
@section('menubar')
  @parent
  クリエイト・ページ
@endsection

@section('content')
<form action="/reserve/store" method="post">
    @csrf
    <table>
        <tr><th>customer_id</th><td><input type="number" name="customer_id"></td></tr>
        <tr><th>customer_id</th><td><input type="number" name="shop_id"></td></tr>
        <tr><th>customer_id</th><td><input type="datetime" name="datetime"></td></tr>
        <tr><th>customer_id</th><td><input type="number" name="people_num"></td></tr>
    </table>
    <input type="submit" value="send">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
