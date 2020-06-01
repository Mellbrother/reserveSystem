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

<p>写真</p>
<p>昼の値段</p>
<p>夜の値段</p>
<input class="btn btn-danger" type="button"
onClick="location.href='http://www.localhost:8000/customer/reserve/shop/{shop_id}'" value="予約一覧"
style="position: relative; left: 800px;
width: 100px; height: 35px;">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
