@extends('layout.app')

@section('content')
<a href="/customer/home">HOME</a>
<form action="/customer/reserve/shop/{{$shop_id}}" method="post">
  @csrf
    <div class="dropdown">
      <p>人数:
      <select class="btn btn-light dropdown-toggle" name="people_num">
        <option value="" style="display: none;">選択してください</option>
        @for($i = 1; $i < 10; $i++)
          <option value="{{$i}}">{{$i}}名</option>
        @endfor
      </select>
       </p>
    </div>

    <br>

    <p>来店日:
      <input type="date" cmanCLDat="USE:ON"
      class="btn btn-light" name="date" value=""style="width:200px;">
     </p>

    <br>

    <div class="dropdown">
      <p>時間:
      <select class="btn btn-light dropdown-toggle" name="reserve_time">
        <option value="" style="display: none;">選択してください</option>
        @foreach($date_period as $date)
          <option value="{{$date->format('H:i')}}">{{$date->format('H:i')}}</option>
        @endforeach
      </select>
       </p>
    </div>

  <input type="hidden" name="customer_id" value="{{$id}}">
  <input type="hidden" name="shop_id" value="{{$shop_id}}">

  <input type="submit" value="予約する">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
