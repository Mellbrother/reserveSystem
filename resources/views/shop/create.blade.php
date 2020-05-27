@extends('layout.app')

@section('title', 'Shop.create')
@section('menubar')
  @parent
  クリエイト・ページ
@endsection

@section('content')
<form action="/shop/store" method="post">
    @csrf
    <table>
        <tr><th>clerk_id</th><td><input type="number" name="clerk_id"></td></tr>
        <tr><th>shop_name</th><td><input type="text" name="name"></td></tr>
        <tr><th>place_address</th><td><input type="text" name="place_address"></td></tr>
        <tr><th>lunch_price</th><td><input type="number" name="lunch_price"></td></tr>
        <tr><th>dinner_price</th><td><input type="number" name="dinner_price"></td></tr>
        <tr><th>seat_num</th><td><input type="number" name="seat_num"></td></tr>
        <tr><th>open_time</th><td><input type="text" name="open"></td></tr>
        <tr><th>close_time</th><td><input type="text" name="close"></td></tr>
        <tr><th>average_stay_time</th><td><input type="number" name="average_stay_minute"></td></tr>
        <tr><th>station</th><td><input type="text" name="station"></td></tr>
        <tr><th>walk_minute</th><td><input type="number" name="walk_minute"></td></tr>
    </table>
    <input type="submit" value="send">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
