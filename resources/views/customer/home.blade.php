@extends('layout.app')

@section('content')
<form class="content" action="searchResult" method="post">
  @csrf
  <div class="form-group">
    <div class="input-group">
      <input type="text" class="form-control" name="name" id="text10" placeholder="店名検索" required>
      <div class="invalid-feedback">
      </div>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">検索</button>
</form>

  <input class="btn btn-danger" type="button"
  onClick="location.href='/customer/reserveList'" value="予約一覧"
  style="position: relative;  left: 800px;
  width: 100px; height: 35px;">

  <hr>

<form class="content" action="searchResult" method="post">
  @csrf
  <div style="display:inline-flex">
    <div class="dropdown">
      <select class="btn btn-success dropdown-toggle" name="station">
        @foreach($stations as $station)
          <option value="{{$station->station}}">{{$station->station}}</option>
        @endforeach
      </select>
    </div>

    <br>

    <div class="dropdown">
      <select class="btn btn-danger dropdown-toggle" name="tags[]">
        @foreach($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->name}}</option>
          @endforeach
      </select>
    </div>

    <br>


    <div class="dropdown">
      <select class="btn btn-warning dropdown-toggle"  name="price">
        <option value="">¥こだわらない</option>
        <option  value="500~1000">500~1000円</option>
        <option  value="1001~1500円">1001~1500円</option>
        <option  value="1501~2000円">1501~2000円</option>
        <option  value="2001~3000円">2001~3000円</option>
        <option  value="3001~4000円">3001~4000円</option>
        <option  value="4001~5000円">4001~5000円</option>
        <option  value="5001~7000円">5001~7000円</option>
        <option  value="7001~10000円">7001~10000円</option>
        <option  value="10001~15000円">10001~15000円</option>
        <option  value="15001~20000円">15001~20000円</option>
        <option  value="20001~30000円">20001~30000円</option>
      </select>
    </div>

    <div class="detail">
      <button type="submit" class="btn btn-primary">詳細検索</button>
    </div>
  </div>
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
