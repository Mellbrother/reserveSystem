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
            @if($type == "customer")
            <td>お客様</td>
            <td>{{$form->name}}</td>
            @elseif($type == "clerk")
            <td>店員</td>
            <td>{{$form->name}}</td>
            @endif
        </tr>
    </table>

    

    <form action="/admin/{{$id}}/userDelete" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$form->id}}">
        <input type="hidden" name="type" value="{{$type}}">
        <input type="submit" value="削除">
    </form>
    @endif

    <a href="/admin/{{$id}}/home">管理者ホームに戻る</a><br>
@endsection
        
