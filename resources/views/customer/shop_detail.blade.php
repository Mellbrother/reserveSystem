@extends('layouts.helloapp')

@section('title', 'customer.search_result');

@section('menubar')
  @parent
  指定した店の予約画面
@section('content')
<table>
  <tr>
      <th>id</th>
      <th>name</th>
      <th>place_address</th>
  </tr>
  <tr>
      <td>{{item->id}}</td>
      <td>{{item->name}}</td>
      <td>{{item->place_address}}</td>
  </tr>
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
