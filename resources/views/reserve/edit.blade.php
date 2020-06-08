@extends('layout.app')

@section('title', 'Reserve.edit')
@section('menubar')
  @parent
  エディット・ページ
@endsection

@section('content')
<form action="/reserve/{{$id}}" method="post">
	@method('PUT')
    @csrf
    <table>
        <tr><th>customer_id</th><td><input type="number" name="customer_id"
        	value="{{old('customer_id')}}"></td></tr>
        <tr><th>customer_id</th><td><input type="number" name="shop_id" 
        	value="{{old('shop_id')}}"></td></tr>
        <tr><th>customer_id</th><td><input type="datetime" name="datetime" 
        	value="{{old('datetime')}}"></td></tr>
        <tr><th>customer_id</th><td><input type="number" name="people_num" 
        	value="{{old('people_num')}}"></td></tr>
    </table>
    <input type="submit" value="update">
</form>
<form action="/reserve/{{$id}}" method="post">
	@method('DELETE')
    @csrf
    <input type="submit" value="delete">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection