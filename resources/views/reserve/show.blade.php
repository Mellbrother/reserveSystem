@extends('layout.app')

@section('title', 'Reserve.show')
@section('menubar')
  @parent
  ショウ・ページ
@endsection

@section('content')
<table>
    <tr><th>id</th>
        <th>customer_id</th>
        <th>shop_id</th>
        <th>datetime</th>
        <th>people_num</th>
    </tr>
    <tr><td>{{$item->id}}</td>
        <td>{{$item->customer_id}}</td>
        <td>{{$item->shop_id}}</td>
        <td>{{$item->datetime}}</td>
        <td>{{$item->people_num}}</td>
     </tr>
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection