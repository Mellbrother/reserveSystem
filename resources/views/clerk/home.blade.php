@extends('layout.app')

@section('title', 'Shop.home')
@section('menubar')
  @parent
  ホーム・ページ
@endsection

@section('content')
{{--
  <input type="button" class="btn btn-danger"
	value="予約確認" onclick="location.href='/clerk/searchReserve'">
	@if($is_shop_registerd)
		<input type="button" class="btn btn-primary"
		value="ショップ登録変更" onclick="location.href='/clerk/shopEdit'">
	@else
		<input type="button" class="btn btn-primary"
		value="ショップ登録" onclick="location.href='/clerk/shopCreate'">
	@endif
  --}}
	<input type="button" class="btn btn-success"
	value="タグ登録" onclick="location.href='/clerk/tagCreate'">

<p>clerkのページ</p>

@endsection


@section('footer')
copyright 2020 GroupA.
@endsection
