@extends('layout.app')

@section('title', 'Tag.edit')
@section('menubar')
  @parent
  エディット
@endsection

@section('content')
<form action="/tag/{{$id}}" method="post">
    @method('PUT')
    @csrf
    <table>
        <tr><th>tag_id</th><td><input type="number" name="id"
            value="{{old('id')}}"></td></tr>
        <tr><th>tag_name</th><td><input type="number" name="name"
            value="{{old('name')}}"></td></tr>
    </table>
    <input type="submit" value="update">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
