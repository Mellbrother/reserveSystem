@extends('layout.app')

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif


    <form action="/admin/accountUpdate" method="post">
    <table class="table table-bordered">
        @csrf
        <input type="hidden" name="id" value="{{$account->id}}">
        <tr><th>name: </th><td><input type="text" name="name" value="{{$account->name}}"></td></tr>
        <tr><th>email: </th><td><input type="mail" name="email" value="{{$account->email}}"></td></tr>
        </table>
        <input type="submit" value="変更"></td></tr>
    </form>

    <br><a href="/admin/home">管理者ホームに戻る</a><br>
@endsection
