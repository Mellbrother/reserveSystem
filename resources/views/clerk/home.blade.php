@extends('layout.app')

@section('title', 'Shop.home')
@section('menubar')
  @parent
  ホーム・ページ
@endsection

@section('content')
	<div class="buttonSet">
		<input type="button" class="btn btn-danger" 
		value="予約確認" onclick="location.href='/clerk/{{$id}}/searchReserve'">
		@if($is_shop_registerd)
			<input type="button" class="btn btn-primary" 
			value="ショップ登録変更" onclick="location.href='/clerk/{{$id}}/shopEdit'">
		@else
			<input type="button" class="btn btn-primary" 
			value="ショップ登録" onclick="location.href='/clerk/{{$id}}/shopCreate'">
		@endif
		<input type="button" class="btn btn-success" 
		value="タグ登録" onclick="location.href='/clerk/{{$id}}/tagCreate'">
		<input type="button" class="btn btn-success" 
		value="プロフィール変更" onclick="location.href='/clerk/{{$id}}/edit'">
	</div>
	@if($is_shop_registerd)
		<table class="table">
	        <tr><th>name</th><td>{{$shop->name}}</td></tr>
	        <tr><th>tag</th>
	        	<td>
	        		<ul>
			        	@foreach($tags as $tag)
			        		<li class="mgr-40">{{$tag->name}}</li>
			        	@endforeach
	        		</ul>
	        	</td>
	        </tr>
	        <tr><th>place_address</th><td>{{$shop->place_address}}</td></tr>
	        <tr><th>lunch_price</th><td>{{$shop->lunch_price}}</td></tr>
	        <tr><th>dinner_price</th><td>{{$shop->dinner_price}}</td></tr>
	        <tr><th>seat_num</th><td>{{$shop->seat_num}}</td></tr>
	        <tr><th>open</th><td>{{$shop->open}}</td></tr>
	        <tr><th>close</th><td>{{$shop->close}}</td></tr>
	        <tr><th>average_stay_minute</th><td>{{$shop->average_stay_minute}}</td></tr>
	        <tr><th>station</th><td>{{$shop->station}}</td></tr>
	        <tr><th>walk_minute</th><td>{{$shop->walk_minute}}</td></tr>
	    </table>
	@endif
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
