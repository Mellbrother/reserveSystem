@extends('layout.app')

@section('content')
<table class="table">
  <thead class="thead-dark">
    <tr>
        <th>id</th>
        <th>name</th>
        <th>place_address</th>
        <th>open</th>
        <th>close</th>
        <th>lunchprice</th>
        <th>dinnerprice</th>
        <th>station</th>
        <th>walk_minute</th>
      </tr>
  </thead>

  @foreach($shops as $shop)
    <tr class="table-success">
      <td class="font-color">{{$shop->id}}</td>
      <td><a href="http://localhost:8000/customer/shop/{{$shop->id}}">
        {{$shop->name}}</a></td>
      <td class="font-color">{{$shop->place_address}}</td>
      <td class="font-color">{{$shop->open}}</td>
      <td class="font-color">{{$shop->close}}</td>
      <td class="font-color">{{$shop->lunch_price}}</td>
      <td class="font-color">{{$shop->dinner_price}}</td>
      <td class="font-color">{{$shop->station}}</td>
      <td class="font-color">{{$shop->walk_minute}}</td>
    </tr>
  @endforeach

</table>

<hr>

<form class="content" action="searchResult" method="post">
  @csrf
  <div style="display:inline-flex">
    <div>
      <select name="station">
      @foreach($stations as $station)
        <option value="{{$station->station}}">{{$station->station}}</option>
      @endforeach
      </select>
    </div>

    <div>
      <select id="ms" name="tag" multiple="multiple">
        @foreach($tags as $tag)
          <option value="{{$tag->name}}">{{$tag->name}}</option>
        @endforeach
      </select>
    </div>

{{--
    <div>
      <select id="ms" name="tag" multiple="multiple">
        @foreach($tags as $tag)
          <option value="{{$tag->name}}">{{$tag->name}}</option>
        @endforeach
      </select>
    </div>
--}}

    <div>
      <select name="price">
        <option value="">¥こだわらない</option>
        <option value="500~1000">500~1000円</option>
        <option value="1001~1500円">1001~1500円</option>
        <option value="1501~2000円">1501~2000円</option>
        <option value="2001~3000円">2001~3000円</option>
        <option value="3001~4000円">3001~4000円</option>
        <option value="4001~5000円">4001~5000円</option>
        <option value="5001~7000円">5001~7000円</option>
        <option value="7001~10000円">7001~10000円</option>
        <option value="10001~15000円">10001~15000円</option>
        <option value="15001~20000円">15001~20000円</option>
        <option value="20001~30000円">20001~30000円</option>
      </select>
    </div>

    <br>

    <div class="detail">
      <button type="submit" class="btn btn-primary">再検索</button>
    </div>
  </div>

</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection






{{--
  <div >
    <select id = "ms" class="btn btn-danger dropdown-toggle" name="tag" multiple="multiple">
      <optgroup label="すべての項目">
        @foreach($tags as $tag)
          <option type="checkbox" value="{{$tag->name}}">{{$tag->name}}</option>
        @endforeach
      </optgroup>
    </select>

  </div>

    <div class="dropdown">
      <select class="btn btn-danger dropdown-toggle" name="tag">
        <option value="">ジャンルすべて</option>
      @foreach($tags as $tag)
        <option value="{{$tag->name}}">{{$tag->name}}</option>
      @endforeach
      </select>

    </div>


    <div>
      <button type="button" class = "btn btn-danger dropdown-toggle">
        <p>ジャンル</p>
        <div class="default">
          <table width="180px" id="genre">
          @foreach($tags as $tags)
            <tr>
              <td wigth="50px">{{$tags->name}}</td>
              <td><input type="checkbox" name="tag[]"
                value="{{$tags->name}}"></td>
            </tr>
          @endforeach
          </table>
        </div>
      </div>

      <div class="dropdown">
        <button type="button"
          class="btn btn-danger dropdown-toggle"
          data-toggle="dropdown"
          aria-haspopup="true"
          aria-expanded="false">
          ジャンル
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdown1">
          <div class="default">
            <table width="180px" id="genre">
            @foreach($tags as $tags)
              <tr>
                <td wigth="50px">{{$tags->name}}</td>
                <td><input type="checkbox" name="tag[]"
                  value="{{$tags->name}}"></td>
              </tr>
            @endforeach
            </table>
          </div>
        </div>
      </div>


--}}
