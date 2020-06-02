@extends('layout.app')

@section('title', 'Shop.Reserve')
@section('menubar')
  @parent
  予約・ページ
@endsection

@section('content')
<a href="/customer/home">HOME</a>
<table class="table">
    <thead class="thead-dark">
        <tr><th>日程</th><th>ショップの名前</th><th>予約人数</th>
    </thead>
    @foreach($items as $item)
        @if($loop->first)
            @php
                $year = date('Y', strtotime($item->datetime));
                $month = date('m', strtotime($item->datetime));
            @endphp
            <tr><td class="text-primary">
               @php
                    echo date('Y年', strtotime($item->datetime));
                @endphp
                </td>
                <td></td>
                <td></td>
            </tr>
            <tr><td>
                    <div class="text-success mgr-20">
                        @php
                            echo date('m月', strtotime($item->datetime));
                        @endphp
                    </div>
                </td>
                <td></td>
                <td></td>
            </tr>
        @endif

        @if(date('Y', strtotime($item->datetime)) > $year)
        <tr><td class="text-primary">
            @php
                $year = date('Y年', strtotime($item->datetime));
                echo $year;
            @endphp
            </td>
            <td></td>
            <td></td>
        </tr>
        @endif
        @if(date('m', strtotime($item->datetime)) > $month)
        <tr><td>
                <div class="text-success mgr-20">
                    @php
                        echo date('m月', strtotime($item->datetime));
                    @endphp
                </div>
            <td></td>
            <td></td>
        </tr>
        @endif

        <tr><td>
            <div class="mgr-40">
                 @php
                    echo date('d日 H:i', strtotime($item->datetime));
                @endphp
            </div>
            <td>{{$item->shop_name}}</td>
            <td>{{$item->people_num}}</td>
        </tr>
    @endforeach
</table>
@endsection

@section('footer')
copyright 2020 GroupA.
@endsection
