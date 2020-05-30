@extends('layout.app')

@section('title', 'Shop.shop_create')
@section('menubar')
  @parent
  ショップ登録・ページ
@endsection

@section('content')
<a href="http://localhost:8000/clerk/home">HOME</a>
<form action="/clerk/tagStore" method="post">
    @csrf
    @foreach($tags as $tag)
        <label class="mgr-20">
            @if(in_array($tag->id, $hasTagIds))
                <input type="checkbox" name="tags[]" value="{{$tag->id}}" checked="checked">
            @else
                <input type="checkbox" name="tags[]" value="{{$tag->id}}">
            @endif
            {{$tag->name}}
        </label>
    @endforeach
    <p></p>
    <input type="submit" value="登録">
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
