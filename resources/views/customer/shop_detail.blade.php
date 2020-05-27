@extends('layout.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>name</th>
      <th>place_address</th>
      <th>lunch_price</th>
      <th>dinner_price</th>
    </tr>
  </thead>
  <tr class="table-success">
    <td class="font-color">{{$shop->name}}</td>
    <td class="font-color">{{$shop->place_address}}</td>
    <td class="font-color">{{$shop->lunch_price}}</td>
    <td class="font-color">{{$shop->dinner_price}}</td>
  </tr>
</table>

<p>カレンダー</p>
<p>写真</p>
<form class="content" action="reserve/shop/{shop_id}" method="post">
  <input type="button" name="resrve" value="予約"></button>
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
