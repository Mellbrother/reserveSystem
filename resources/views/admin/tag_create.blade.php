@extends('layout.app')

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/admin/storeTag" method="post">
    <table>
        @csrf
        <tr><th>タグの名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="追加"></td></tr>
    </table>
    </form>

    <form action="/admin/{{$id}}/deleteTag" method="post">
    <table class="table table-striped">
    @csrf
    <tr><th>タグ一覧</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->name}}</td>
            <td><input type="checkbox" name="checkbox[]" value="{{$item->id}}"></td>
        </tr>
    @endforeach
    </table>
    <input type="submit" value="削除"><br><br><br>

    <a href="/admin/{{$id}}/home">管理者ホームに戻る</a><br>

@endsection
