@extends('layout.app')

@section('content')
@csrf
<a href="/customer/home">HOME</a>
<table class="table">
  <thead class="thead-dark">
    <tr>

        <th>店</th>
        <th>住所</th>
        <th>開店</th>
        <th>閉店</th>
        <th>昼食</th>
        <th>夕食</th>
        <th>駅</th>
        <th>店までの時間</th>
        <th>タグ</th>
      </tr>
  </thead>

  @foreach($shops as $shop)
    <tr class="table-success">
      <td><a href="/customer/shop/{{$shop->id}}">
        {{$shop->name}}</a></td>
      <td class="font-color">{{$shop->place_address}}</td>
      <td class="font-color">{{$shop->open}}</td>
      <td class="font-color">{{$shop->close}}</td>
      <td class="font-color">{{$shop->lunch_price}}</td>
      <td class="font-color">{{$shop->dinner_price}}</td>
      <td class="font-color">{{$shop->station}}</td>
      <td class="font-color">{{$shop->walk_minute}}</td>
      <td>
        <ul>
          @foreach($shop->tags as $tag)
            <li class="font-color">{{$tag->name}}</li>
          @endforeach
        </ul>
      </td>
    </tr>
  @endforeach

</table>

<hr>

<form class="content" action="searchResult" method="post">
  @csrf
  <div style="display:inline-flex">
    <div>
      <select class="ms" name="station">
      @foreach($stations as $station)
        <option value="{{$station->station}}">{{$station->station}}</option>
      @endforeach
      </select>
    </div>

    <div>
      <select id="ms" name="tags[]" multiple="multiple">
        @foreach($tags as $tag)
          <option value="{{$tag->id}}">{{$tag->name}}</option>
        @endforeach
      </select>
    </div>


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
