@extends('layout.app')

@section('content')
    @if (count($errors) > 0)
    <div>
        <ul>
            @foreach ($error->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="/admin/{{$id}}/userUpdate" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <input type="hidden" name="user_id" value="{{$form->id}}">
        <tr><th>name: </tr><td><input type="text" name="name" value="{{$form->name}}">>/td></tr>
        <tr><th></th><td><input type="submit" value="編集"></td><tr>
    </table>
    </form>

    <form action="/admin/{{$id}}/userDelete" method="post">
        @csrf
        <input type="submit" value="削除">
    </form>
@endsection
        
