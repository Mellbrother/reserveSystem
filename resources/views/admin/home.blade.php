@extends('layout.app')

@section('content')
    <form action="/admin/{{$id}}/findReserve" method="post">
    @csrf
    <input type="number" name="shop_id" value="{{old('shop_id')}}">
    <input type="submit" value="店の予約確認">
    </form>
    
    <form action="/admin/{{$id}}/userEdit" method="post">
    @csrf
    <input type="number" name="user_id" value="{{old('user_id')}}">
    <input type="submit" value="User編集">
    </form>

    <form action="/admin/{{$id}}/createTag" method="get">
    @csrf
    <input type="submit" value="タグの新規登録">
    </form>
@endsection
