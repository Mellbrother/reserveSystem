@extends('layout.app')

@section('title', 'Tag.show')
@section('menubar')
  @parent
  ショウ
@endsection

@section('content')
<table>
    <tr><th>tag_id</th>
        <th>tag_name</th>
    </tr>
    <tr><td>{{$item->id}}</td>
        <td>{{$item->name}}</td>
     </tr>
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
