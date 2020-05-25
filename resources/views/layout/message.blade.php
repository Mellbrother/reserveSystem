@extends('layout.app')

@section('title', 'customer.home');

@section('menubar')
  @parent
  ホーム画面
@section('content')
<p>{{$message}}</p>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
