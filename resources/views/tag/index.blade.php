@extends('layout.app')

@section('title', 'Tag.index')
@section('menubar')
  @parent
  インデックス
@endsection

@section('content')
<table>
    <tr><th>tag_id</th><th>tag_name</th></tr>
    @foreach($items as $item)
        <tr><td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
        </tr>
    @endforeach
</table>

<table>
    <tr><th>id</th><th>name</th></tr>
    @foreach($shops as $shop)
        <tr><td>{{$shop->id}}</td>
            <td>{{$shop->name}}</td>
        </tr>
    @endforeach
</table>

<table>
    <tr><th>id</th><th>name</th></tr>
    @foreach($tags as $tag)
        <tr><td>{{$tag->id}}</td>
            <td>{{$tag->name}}</td>
        </tr>
    @endforeach
</table>

@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
