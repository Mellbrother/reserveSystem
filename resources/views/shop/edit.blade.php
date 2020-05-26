@extends('layout.app')

@section('title', 'Shop.edit')
@section('menubar')
  @parent
  エディット・ページ
@endsection

@section('content')
<form action="/shop/{{$id}}" method="post">
	@method('PUT')
    @csrf
    <table>
          <tr><th>clerk_id</th><td><input type="number" name="clerk_id" value="{{$item->clerk_id}}"></td></tr>
          <tr><th>shop_name</th><td><input type="text" name="name" value="{{$item->name}}"></td></tr>
          <tr><th>place_address</th><td><input type="text" name="place_address" value="{{$item->place_address}}"></td></tr>
          <tr><th>lunch_price</th><td><input type="number" name="lunch_price" value="{{$item->lunch_price}}"></td></tr>
          <tr><th>dinner_price</th><td><input type="number" name="dinner_price" value="{{$item->dinner_price}}"></td></tr>
          <tr><th>seat_num</th><td><input type="number" name="seat_num" value="{{$item->seat_num}}"></td></tr>
          <tr><th>open_time</th><td><input type="text" name="open" value="{{$item->open}}"></td></tr>
          <tr><th>close_time</th><td><input type="text" name="close" value="{{$item->close}}"></td></tr>
          <tr><th>average_stay_time</th><td><input type="number" name="average_stay_minute" value="{{$item->average_stay_minute}}"></td></tr>
          <tr><th>station</th><td><input type="text" name="station" value="{{$item->station}}"></td></tr>
          <tr><th>walk_minute</th><td><input type="number" name="walk_minute" value="{{$item->walk_minute}}"></td></tr>
    </table>
    <input type="submit" value="update">
</form>
<form action="/shop/{{$id}}" method="post">
	@method('DELETE')
    @csrf
    <input type="submit" value="delete">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
