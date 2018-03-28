<div class="keyword-title text-center">{{$relation}}</div>

@if(empty($relation_array['message']))
    @if(count($relation_array) > 0)
        @foreach($relation_array as $temp)
            <div class='history-data'>
                <div class='title text'>
                    <div class='title text'>
                        <a target="_blank" href="{{$temp["連結"]}}" onclick='insertHistory("{{$temp["標題"]}}","{{$temp["連結"]}}","Google")'>
                            {{$temp["標題"]}}
                        </a>
                    </div>
                    <div class='text'>
                        <b>日期：</b>{{$temp["日期"]}}
                    </div>
                    <div class='text'>
                        <b>來源：</b>{{$temp["來源"]}}
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@else
    <div class='no-data text-center'>
        沒 有 相 關 資 訊
    </div>
@endif