@extends('layout.app')

@section('title', 'Shop.shop_create')
@section('menubar')
  @parent
  ショップ登録・ページ
@endsection

@section('content')
<a href="/clerk/home">HOME</a>
<form action="/clerk/shopUpdate" method="post">
    @csrf
    <table class="table">
        <tr><th></th><td><input type="hidden" name="clerk_id"
            value="{{$id}}"></td></tr>
        <tr><th>name</th><td><input type="string" name="name"
            value="{{$shop->name}}"></td></tr>
        <tr><th>place_address</th><td><input type="string" name="place_address"
            value="{{$shop->place_address}}"></td></tr>
        <tr><th>lunch_price</th><td><input type="number" name="lunch_price"
            value="{{$shop->lunch_price}}"></td></tr>
        <tr><th>dinner_price</th><td><input type="number" name="dinner_price"
            value="{{$shop->dinner_price}}"></td></tr>
        <tr><th>seat_num</th><td><input type="number" name="seat_num"
            value="{{$shop->seat_num}}"></td></tr>
        <tr><th>open</th><td><input type="string" name="open"
            value="{{$shop->open}}"></td></tr>
        <tr><th>close</th><td><input type="string" name="close"
            value="{{$shop->close}}"></td></tr>
        <tr><th>average_stay_time</th><td><input type="number" name="average_stay_minute" value="{{$shop->average_stay_minute}}"></td></tr>
        <tr><th>station</th><td><input type="string" name="station"
            value="{{$shop->station}}"></td></tr>
        <tr><th>walk_minute</th><td><input type="number" name="walk_minute"
            value="{{$shop->walk_minute}}"></td></tr>
    </table>
    <input type="submit" value="更新">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
