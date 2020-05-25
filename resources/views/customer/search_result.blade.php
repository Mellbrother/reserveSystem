@extends('layouts.helloapp')

@section('title', 'customer.search_result');

@section('menubar')
  @parent
  検索したお店
@section('content')
<table>
  <tr>
      <th>name</th>
      <th>place_address</th>
      <th>open</th>
      <th>close</th>
      <th>lunchprice</th>
      <th>dinnerprice</th>
      <th>station</th>
      <th>walk_minute</th>
  </tr>
  <tr>
      <td>{{item->name}}</td>
      <td>{{item->place_address}}</td>
      <td>{{item->open}}</td>
      <td>{{item->close}}</td>
      <td>{{item->lunchprice}}</td>
      <td>{{item->dinnerprice}}</td>
      <td>{{item->station}}</td>
      <td>{{item->walk_minute}}</td>
  </tr>
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
