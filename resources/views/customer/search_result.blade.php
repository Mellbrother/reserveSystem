@extends('layout.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>place_address</th>
        <th>open</th>
        <th>close</th>
        <th>lunchprice</th>
        <th>dinnerprice</th>
        <th>station</th>
        <th>walk_minute</th>
      </tr>
  </thead>

  @foreach($shops as $shop)
    <tr class="table-success">
      <td class="font-color">{{$shop->id}}</td>
      <td><a href="http://localhost:8000/customer/shop/{{$shop->id}}">
        {{$shop->name}}</a></td>
      <td class="font-color">{{$shop->place_address}}</td>
      <td class="font-color">{{$shop->open}}</td>
      <td class="font-color">{{$shop->close}}</td>
      <td class="font-color">{{$shop->lunch_price}}</td>
      <td class="font-color">{{$shop->dinner_price}}</td>
      <td class="font-color">{{$shop->station}}</td>
      <td class="font-color">{{$shop->walk_minute}}</td>
    </tr>
  @endforeach

</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
