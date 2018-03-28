<div class="keyword-title text-center">{{$company}}</div>

@if(empty($company_array['message']))
    @if(count($company_array) > 0)
        @php 
            usort($company_array, function($a, $b) { //Sort the array using a user defined function
                return $a["裁判日期"] > $b["裁判日期"] ? -1 : 1; //Compare the scores
            });
        @endphp

        @foreach($company_array as $temp)
        
            <div class='history-data'>
                <div class='title text'>
                    <a target="_blank" href="{{$temp["裁判字號連結"]}}" onclick='insertHistory("{{$temp["裁判字號"]}}","{{$temp["裁判字號連結"]}}","法源法律網")'><b>裁判字號：</b>{{$temp["裁判字號"]}}</a>
                </div>
                <div class='text'>
                    <b>裁判：</b>{{$temp["裁判"]}}
                </div>
                <div class='text'>
                    <b>裁判日期：</b>{{$temp["裁判日期"]}}
                </div>
                <div class='text'>
                    <b>裁判案由:</b>{{$temp["裁判案由"]}}
                </div>
            </div>
        @endforeach
    @endif
@else
    <div class='no-data text-center'>
        沒 有 相 關 資 訊
    </div>
@endif