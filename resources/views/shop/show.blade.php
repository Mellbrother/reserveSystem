@extends('layout.app')

@section('title', 'Shop.show')
@section('menubar')
  @parent
  ショウ・ページ
@endsection

@section('content')
<table>
  <tr><th>id</th><th>clerk_id</th><th>name</th><th>place_address</th><th>lunch_price</th>
     <th>dinner_price</th><th>seat_num</th><th>open</th><th>close</th><th>average_stay_time</th>
     <th>station</th><th>walk_minute</th>
  </tr>

  <tr><td>{{$item->id}}</td>
     <td>{{$item->clerk_id}}</td>
     <td>{{$item->name}}</td>
     <td>{{$item->place_address}}</td>
     <td>{{$item->lunch_price}}</td>
     <td>{{$item->dinner_price}}</td>
     <td>{{$item->seat_num}}</td>
     <td>{{$item->open}}</td>
     <td>{{$item->close}}</td>
     <td>{{$item->average_stay_time}}</td>
     <td>{{$item->station}}</td>
     <td>{{$item->walk_minute}}</td>
  </tr>

</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
