@extends('layout.app')

@section('content')
<table>
  <tr>
      <th>id</th>
      <th>name</th>
      <th>place_address</th>
  </tr>
  <tr>
      <td>{{$shop->id}}</td>
      <td>{{$shop->name}}</td>
      <td>{{$shop->place_address}}</td>
  </tr>
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
