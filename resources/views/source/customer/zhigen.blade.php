<div class="keyword-title text-center">{{$customer}}</div>

@php
    date_default_timezone_set("Asia/Taipei");
    $date = date("Y/m/d") . " " . date("H:i A");
@endphp

@if(count($customer_array) > 0)
    @foreach($customer_array as $temp)
        <div class='history-data'>
            <div class='title text'>
                <a target="_blank" href='{{$temp->url}}' onclick='insertHistory("{{$temp->title}}","{{$temp->url}}","植根法律網")'>{{$temp->title}}</a>
            </div>
            <div class='text'>
                {{$temp->date}}
            </div>
            <div class='article text'>
                {{$temp->article}}
            </div>
        </div>
    @endforeach
@else
    <div class='no-data text-center'>
        沒 有 相 關 資 訊
    </div>
@endif