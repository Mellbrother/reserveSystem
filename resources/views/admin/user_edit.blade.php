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

    @if($form == null)
    <p>このユーザーは存在していないか、削除されています。</p><br>
    @else
    <table class="table table-bordered">
    <tr><th>役割</th><th>名前</th></tr>
        <tr>
            @if($form->admin != null)
            <td>管理者</td>
            <td>{{$form->admin->name}}</td>
            @elseif($form->clerk != null)
            <td>店員</td>
            <td>{{$form->clerk->name}}</td>
            @elseif($form->customer != null)
            <td>お客様</td>
            <td>{{$form->customer->name}}</td>
            @endif
        </tr>
    </table>

    <form action="/admin/userUpdate" method="post">
    <table>
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <tr><th>email: </tr><td><input type="text" name="email" value="{{$form->email}}"></td></tr>
        <tr><th></th><td><input type="submit" value="編集"></td><tr>
    </table>
    </form>

    <form action="/admin/userDelete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <input type="submit" value="削除">
    </form>
    @endif

    <a href="/admin/home">管理者ホームに戻る</a><br>
@endsection
