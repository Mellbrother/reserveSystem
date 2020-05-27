@extends('layout.app')

@section('content')
    @if(count($errors) > 0)
    <div>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action = "/admin/{{$id}}/destroyReserve" method="post">
    <table class="table">
    @csrf
        <thead class="thead-dark">
            <tr><th>日程</th><th>お客様の名前</th><th>予約人数</th><th>削除する予約</th>
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
                <td></td>
            </tr>
            @endif

            <tr><td>
                <div class="mgr-40">
                     @php
                        echo date('d日 h:i', strtotime($item->datetime));
                    @endphp
                </div>
                <td>{{$item->customer_id}}</td>
                <td>{{$item->people_num}}</td>
                <td><input type="checkbox" name="checkbox[]" value="{{$item->id}}"></td>
            </tr>
        @endforeach
    </table>
    <input type="submit" value="削除">
    </form>

    <a href="/admin/{{$id}}/home">管理者ホームに戻る</a><br>
@endsection
