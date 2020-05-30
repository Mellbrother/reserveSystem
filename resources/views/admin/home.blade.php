@extends('layout.app')

@section('content')
    <p>管理者ページ<p><br>

    <form action="/admin/{{$id}}/findReserve" method="get">
    @csrf
    <input type="number" name="shop_id" value="{{old('shop_id')}}" min="1">
    <input type="submit" value="店の予約確認" class="btn btn-primary">
    </form>
    
    <form>
    @csrf
    <input type="number" name="fid" value="{{old('fid')}}" min="1">
    <input type="submit" value="Customer編集" class="btn btn-danger" formaction="/admin/{{$id}}/customerEdit">
    <input type="submit" value="Clerk編集" class="btn btn-info" formaction="/admin/{{$id}}/clerkEdit">
    </form>

    <form action="/admin/{{$id}}/createTag" method="get">
    @csrf
    <input type="submit" value="タグの新規登録" class="btn btn-success">
    </form>
@endsection
