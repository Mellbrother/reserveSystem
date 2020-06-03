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

<div id="sampleCarousel" class="carousel slide" data-ride="carousel" style="width:400px; height:500px;">
    <ol class="carousel-indicators">
      <li class="active" data-target="#sampleCarousel" data-slide-to="0"></li>
      <li data-target="#sampleCarousel" data-slide-to="1"></li>
      <li data-target="#sampleCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox"style="width:100%; height:100%;">
      <div class="item active">
        <img src="/storage/store_photo/izakaya1_man.png" alt="居酒屋1">
      </div>
      <div class="item">
        <img src="/storage/store_photo/izakaya2_tatemono.png" alt="居酒屋1">
      </div>
    </div>
    <a class="left carousel-control" href="#sampleCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">前へ</span>
	</a>
    <a class="right carousel-control" href="#sampleCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">次へ</span>
	</a>
  </div>

<input class="btn btn-danger" type="button"
onClick="location.href='/customer/reserve/shop/{{$shop_id}}'" value="予約画面へ"
style="position: relative; left: 500px;
width: 100px; height: 35px;">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
