@extends('layout.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th>店</th>
      <th>住所</th>
      <th>開店</th>
      <th>閉店</th>
      <th>昼食</th>
      <th>夕食</th>
      <th>駅</th>
      <th>店までの時間</th>
    </tr>
  </thead>
  <tr class="table-success">
    <td class="font-color">{{$shop->name}}</td>
    <td class="font-color">{{$shop->place_address}}</td>
    <td class="font-color">{{$shop->open}}</td>
    <td class="font-color">{{$shop->close}}</td>
    <td class="font-color">{{$shop->lunch_price}}</td>
    <td class="font-color">{{$shop->dinner_price}}</td>
    <td class="font-color">{{$shop->station}}</td>
    <td class="font-color">{{$shop->walk_minute}}</td>
  </tr>
</table>

<p>写真</p>

<input class="btn btn-danger" type="button"
onClick="location.href='/customer/reserve/shop/{{$shop_id}}'" value="予約画面へ"
style="position: relative; left: 500px;
width: 100px; height: 35px;">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
