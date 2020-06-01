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
  onClick="location.href='http://www.localhost:8000/customer/home'" value="予約一覧"
  style="position: relative;  left: 800px;
  width: 100px; height: 35px;">
  <hr>

<form class="content" action="searchResult" method="post">
  @csrf
  <div style="display:inline-flex">
    <div class="dropdown">

      <select class="btn btn-secondary dropdown-toggle">
        <option value="指定しない">指定しない</option>
  {{--    @foreach($stations ?? '' as $station)

      <select class="btn btn-secondary dropdown-toggle" name="station">
      @foreach($stations as $station)

        <option value="{{$station->station}}">{{$station->station}}</option>
      @endforeach

      --}}
      </select>

    </div>

    <br>

    <div class="dropdown">
      <select class="btn btn-danger dropdown-toggle">

  {{--      <option value="ジャンルすべて">ジャンルすべて</option>
      @foreach($tags as $tag)
        <option value="{{$tag->name}}">{{$tag->name}}</option>
      @endforeach
  --}}
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










{{--
  <button type="button" id="dropdown1"
    class="btn btn-green dropdown-toggle"
    data-toggle="dropdown"
    aria-haspopup="true"
    aria-expanded="false">
  場所
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdown1">
    @foreach($stations ?? '' as $station)
      <a class="dropdown-item" href="http://localhost:8000/customer/searchResult" wigth="50px">
        {{$station->station}} </a>
    @endforeach
  </div>

  <div class="dropdown" id="dropdown1">
    <button type="button"
      class="btn btn-danger dropdown-toggle"
      data-toggle="dropdown"
      aria-haspopup="true"
      aria-expanded="false">
    ジャンル
    </button>
    <div class="dropdown-menu " aria-labelledby="dropdown1">
    @foreach($tags as $tag)
      <a class="dropdown-item" href="#" wigth="50px">
        <label><input type="checkbox" name="タグ" value="{{$tags->name}}">{{$tag->name}}</label>
      </a>
    @endforeach
    </div>
  </div>


--}}





{{--

  <br>
  <div>
    <button type="button" class = "btn-green" onclick="clickplace()">
      <p>場所</p>
      <div class="default">
        <table width="180px" id="place">
        @foreach($stations ?? '' as $station)
          <tr>
            <td wigth="50px">{{$station->station}}</td>
            <td><input type="checkbox" name="station[]"
              value="{{$stations ?? ''->stations}}"></td>
          </tr>
        @endforeach
        </table>
      </div>



    <button type="button" class = "btn-red" onclick="clickgenre()">
      <p>ジャンル</p>
      <div class="default">
        <table width="180px" id="genre">
        @foreach($tags as $tag)
          <tr>
            <td wigth="50px">{{$tag->name}}</td>
            <td><input type="checkbox" name="tag[]"
              value="{{$tags->name}}"></td>
          </tr>
        @endforeach
        </table>
      </div>


    <button class = "btn-yellow" type="button">
      <p>値段</p>
      <table width="180px">
      @foreach($prices as $price)
          <tr><td hidden="$prices" wigth="50px" onClick="OnbuttonClick();">>{{$price->lunch_price}}</td></tr>

      @endforeach
      </table>
      <div class="">
          <input type="checkbox" name=lunch_price>
          <p>昼食</p>
          <input type="checkbox" name=dinner_price>
          <p>夕食</p>
      </div>
    <br>

    <div class="home">
      <input class = detail_search type="submit" value="詳細検索">
    </div>
  </div>


</form>
--}}
