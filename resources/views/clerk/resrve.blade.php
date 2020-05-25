@extends('layout.app')

@section('title', 'Shop.Reserve')
@section('menubar')
  @parent
  予約・ページ
@endsection

@section('content')
<table>
    <tr><th>id</th><th>name</th><th>place_address</th>
        <th>lunch_rice</th><th>dinner_price</th></tr>
    @foreach($items as $item)
        <tr><td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->place_address}}</td>
            <td>{{$item->lunch_price}}</td>
            <td>{{$item->dinner_price}}</td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
