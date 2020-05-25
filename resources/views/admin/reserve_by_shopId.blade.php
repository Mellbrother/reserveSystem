@extends('layout.app')

@section('content')
    <form action = "admin/{{$id}}/destroyReserve" method="post">
    <table>
    @csrf
    <tr><th>時間順</th><th>お客の人数</th></tr>
    @foreach ($items as $item)
        <tr>
            <td>{{$item->datetime}}</td>
            <td>{{$item->people_num}}</td>
            <td><input type="checkbox" name="checkbox" value="{{$item->id}}"</td>
        </tr>
    @endforeach
    </table>
    <input type="submit" value="削除">
    </form>
@endsection
