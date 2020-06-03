@extends('layout.app')

@section('content')
<a href="/customer/home">HOME</a>
<input class="btn btn-danger" type="button"
    onClick="location.href='/customer/reserve/shop/{{$shop_id}}'" value="予約画面へ"
    style="position: relative; left: 800px;
    width: 200px; height: 50px; margin-bottom: 10px;">
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
    </tr>
  </thead>
  <tr class="table-success">
    <td class="font-color">{{$shop->name}}</td>
    <td class="font-color">{{$shop->place_address}}</td>
    <td class="font-color">{{$shop->open}}</td>
    <td class="font-color">{{$shop->close}}</td>
    <td class="font-color">{{$shop->lunch_price}}</td>
    <td class="font-color">{{$shop->dinner_price}}</td>
    <td class="font-color">{{$shop->station}}</td>
    <td class="font-color">{{$shop->walk_minute}}</td>
  </tr>
</table>

<div id="example-2" class="carousel slide " data-touch="true" data-ride="carousel" style="left:200px; width:600px; height:500px;" >
  <div class="carousel-inner" >
    @forelse($shop->storePhotos as $photo)
      @if($loop->first)
        <div class="carousel-item active">
          <img src= {{$photo->getData()}}>
        </div>
      @else
        <div class="carousel-item">
          <img src= {{$photo->getData()}}>
        </div>
        <a class="carousel-control-prev" href="#example-2" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#example-2" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      @endif

    @empty
      <div class="carousel-item active">
        <img src= "/storage/store_photo/no_image.jpg" alt="no-image">
      </div>
    @endforelse

  </div>
</div>


{{--
  <div id="sampleCarousel" class="carousel slide" data-ride="carousel"
    style="position: relative;
        width: 480px; /* 領域の幅を指定 */
        height: 480px; /* 領域の高さを指定 */
        margin: 2em 5em;
        ">
    <ol class="carousel-indicators">
      <li class="active" data-target="#sampleCarousel" data-slide-to="0" style="color: #000000;"></li>
      <li data-target="#sampleCarousel" data-slide-to="1"></li>
      <li data-target="#sampleCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox"
      style=" position: absolute;
          top: 8%;
          bottom: 0;
          left: 9%;
          right: 0;
          height: auto;
          width: auto;
          max-width: 100%;
          max-height: 100%;
          margin: auto;">

        @forelse($shop->storePhotos as $photo)
          @if($loop->first)
            <div class="item active">
              <img src= {{$photo->getData()}}>
            </div>
          @else
            <div class="item">
              <img src= {{$photo->getData()}}>
            </div>
          @endif
        @empty
          <div class="item active">
            <img src= "/storage/store_photo/no_image.jpg" alt="no-image">
          </div>
        @endforelse
    </div>
    <a class="left carousel-control" href="#sampleCarousel" role="button" data-slide="prev">
		<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
		<span class="sr-only">前へ</span>
	</a>
    <a class="right carousel-control" href="#sampleCarousel" role="button" data-slide="next">
		<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
		<span class="sr-only">次へ</span>
	</a>
  </div>
--}}


@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
