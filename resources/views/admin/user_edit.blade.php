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

    <form action="/admin/{{$id}}/userUpdate" method="post">
<!--rules次第ではこのif文は不要かも？-->
    @if($form == null)
    <p>このユーザーは存在していないか、削除されています。</p><br>
    @else
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>email: </tr><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
        <tr><th></th><td><input type="submit" value="編集"></td><tr>
    </table>
    @endif
    </form>

    <form action="/admin/{{$id}}/userDelete" method="post">
<!--上に同じ？-->
    @if($form != null)
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <input type="submit" value="削除">
    @endif
    </form>
    <a href="/admin/{{$id}}/home">管理者ホームに戻る</a><br>
@endsection
        
