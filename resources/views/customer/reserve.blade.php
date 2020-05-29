@extends('layout.app')

@section('content')
<form action="/customer/{{$id}}/reserve/shop/{{$shop_id}}" method="post">
  @csrf
    <div class="dropdown">
      <p>人数:
      <select class="btn btn-light dropdown-toggle">
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
      class="btn btn-light" style="width:200px;">
     </p>

    <br>

    <div class="dropdown">
      <p>時間:
      <select class="btn btn-light dropdown-toggle" name="station">
        <option value="" style="display: none;">選択してください</option>
        @foreach ($opens as $open)
            <option value="{{$open->$open}}">{{$open->$open}}</option>
        @endforeach
        <option value="10:00">10:00</option>
        <option value="10:30">10:30</option>
        <option value="11:00">11:00</option>
        <option value="11:30">11:30</option>
        <option value="12:00">12:00</option>
        <option value="12:30">12:30</option>
        <option value="13:00">13:00</option>
        <option value="13:30">13:30</option>
        <option value="14:00">14:00</option>
        <option value="14:30">14:30</option>
        <option value="15:00">15:00</option>
        <option value="15:30">15:30</option>
        <option value="16:00">16:00</option>
        <option value="16:30">16:30</option>
        <option value="17:00">17:00</option>
        <option value="17:30">17:30</option>
        <option value="18:00">18:00</option>
        <option value="18:30">18:30</option>
        <option value="19:00">19:00</option>
        <option value="19:30">19:30</option>
        <option value="20:00">20:00</option>
        <option value="20:30">20:30</option>
        <option value="21:00">21:00</option>
        <option value="21:30">21:30</option>
        <option value="22:00">22:00</option>
      </select>
       </p>
    </div>

  <input type="submit" value="reserve">
</form>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
