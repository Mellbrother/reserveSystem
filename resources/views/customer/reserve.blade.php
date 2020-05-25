@extends('layout.app')

@section('content')
<form action="/customer/{{$id}}/reserve/shop/{{$shop_id}}" method="post">
  @csrf
  <table>
  	<tr><th>people_num</th><td><input type="number" name="people_num"></td></tr>
  	<tr><th>datetime</th><td><input type="datetime" name="datetime"></td></tr>
  </table>
  <input type="submit" value="reserve">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
