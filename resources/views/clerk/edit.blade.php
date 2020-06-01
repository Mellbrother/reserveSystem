@extends('layout.app')

@section('title', 'Shop.shop_create')
@section('menubar')
  @parent
  ショップ登録・ページ
@endsection

@section('content')
<a href="http://localhost:8000/clerk/{{$id}}/home">HOME</a>
<form action="/clerk/{{$id}}/update" method="post">
    @csrf
    <input type="hidden" name="id" value="{{$id}}">
    <input type="hidden" name="user_id" value="{{$id}}">
    <table class="table">
        <tr><th>name</th><td><input type="string" name="name"
            value="{{$clerk->name}}"></td></tr>
    </table>
    <input type="submit" value="更新">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection