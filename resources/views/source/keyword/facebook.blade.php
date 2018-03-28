<div class="keyword-title text-center">{{$fb_id}}</div>

@if(empty($keyword_array['message']))
    @if(count($keyword_array) > 0)
        @foreach($keyword_array as $temp)
            <div class='history-data'>
                <div class='title text'>
                    <div class='title text'>
                        <a target="_blank" href="{{$temp["permalink_url"]}}" onclick='insertHistory("{{$temp["id"]}}","{{$temp["permalink_url"]}}","Facebook")'>
                            @if(!empty($temp["message"]))
                                {{$temp["message"]}}
                            @else
                                {{$temp["id"]}}
                            @endif
                        </a>
                    </div>
                    <div class='text'>
                        <b>日期：</b>{{substr($temp["created_time"], 0, 10)}}  {{substr($temp["created_time"], 11, 19)}}
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