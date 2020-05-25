@extends('layout.app')

@section('title', 'Tag.create')
@section('menubar')
  @parent
  クリエイト
@endsection

@section('content')
<form action="/tag/store" method="post">
    @csrf
    <table>
        <tr><th>tag_id</th><td><input type="number" name="id"></td></tr>
        <tr><th>tag_name</th><td><input type="text" name="name"></td></tr>
    </table>
    <input type="submit" value="send">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
