@extends('layout.app')

@section('content')
<form action="/customer/{{$id}}/r/{{$shop_id}}" method="post">
  @csrf
  <input type="button" value="カレンダー">
  <input type="number" value="人数" name="people_num">
  <input type="datetime" value="時間" name="datetime">
  <input type="button" value="確認">
  <input type="submit" value="予約">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
