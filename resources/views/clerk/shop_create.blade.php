@extends('layout.app')

@section('title', 'Shop.shop_create')
@section('menubar')
  @parent
  ショップ登録・ページ
@endsection

@section('content')
<form action="/clerk/{{$id}}/shopStore" method="post">
    @csrf
    <table>
        <tr><th>clerk_id</th><td><input type="number" name="clerk_id"></td></tr>
        <tr><th>name</th><td><input type="string" name="name"></td></tr>
        <tr><th>place_address</th><td><input type="string" name="place_address"></td></tr>
        <tr><th>lunch_price</th><td><input type="number" name="lunch_price"></td></tr>
        <tr><th>dinner_price</th><td><input type="number" name="dinner_price"></td></tr>
        <tr><th>seat_num</th><td><input type="number" name="seat_num"></td></tr>
        <tr><th>open</th><td><input type="string" name="open"></td></tr>
        <tr><th>close</th><td><input type="string" name="close"></td></tr>
        <tr><th>average_stay_time</th><td><input type="number" name="average_stay_time"></td></tr>
        <tr><th>station</th><td><input type="string" name="station"></td></tr>
        <tr><th>walk_minute</th><td><input type="number" name="walk_minute"></td></tr>
    </table>
    <input type="submit" value="send">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
