@extends('layout.app')

@section('content')
    <p>管理者ページ<p>

    <form action="/admin/findReserve" method="post">
    @csrf
    <input type="number" name="shop_id" value="{{old('shop_id')}}" min="1">
    <input type="submit" value="店の予約確認" class="btn btn-primary">
    </form>

    <form method="post">
    @csrf
    <input type="mail" name="email" value="{{old('email')}}">
    <input type="submit" value="Customer編集" class="btn btn-danger" formaction="/admin/customerEdit">
    <input type="submit" value="Clerk編集" class="btn btn-info" formaction="/admin/clerkEdit">
    </form>

    <form action="/admin/createTag">
    @csrf
    <input type="submit" value="タグの新規登録" class="btn btn-success">
    </form>

    <br><br><br>
    <form action="/admin/accountEdit">
    @csrf
    <input type="submit" value="アカウント編集" class="btn btn-dark">
    </form>
@endsection
