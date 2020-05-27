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

    @if($session_data != null)
    <p>直近の追加タグ：「{{$session_data}}」<p>
    @endif
    <form action="/admin/{{$id}}/storeTag" method="post">
    <table>
        @csrf
        <tr><th>タグの名前: </th><td><input type="text" name="name" value="{{old('name')}}"></td></tr>
        <tr><th></th><td><input type="submit" value="追加"></td></tr>
    </table>
    </form>
    <a href="/admin/{{$id}}/home">管理者ホームに戻る</a><br>
@endsection
