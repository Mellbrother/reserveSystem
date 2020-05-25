@extends('layout.app')

@section('content')
<table>
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
  @foreach($shops as $shop)  
    <tr>
      <td>{{$shop->id}}</td>
      <td>{{$shop->name}}</td>
      <td>{{$shop->place_address}}</td>
      <td>{{$shop->open}}</td>
      <td>{{$shop->close}}</td>
      <td>{{$shop->lunch_price}}</td>
      <td>{{$shop->dinner_price}}</td>
      <td>{{$shop->station}}</td>
      <td>{{$shop->walk_minute}}</td>
    </tr>
  @endforeach
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
