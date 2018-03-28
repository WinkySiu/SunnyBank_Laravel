<div class="keyword-title text-center">{{$relation}}</div>

@if(empty($relation_array['message']))
    @if(count($relation_array) > 0)
        
        @php 
            usort($relation_array, function($a, $b) { //Sort the array using a user defined function
                return $a["事實發生日"] > $b["事實發生日"] ? -1 : 1; //Compare the scores
            });
        @endphp

        @foreach($relation_array as $temp)
            <div class='history-data'>
                <div class='title text'>
                    <b>主旨：</b>{{$temp["主旨"]}}
                </div>
                <div class='text'>
                    <b>事實發生日：</b>{{$temp["事實發生日"]}}
                </div>
                <div class='text'>
                    <b>發言人：</b>{{$temp["發言人"]}}
                </div>
                <div class='text'>
                    <b>發言人職稱:</b>{{$temp["發言人職稱"]}}
                </div>
                <div class='text'>
                    <b>發言人電話:</b>{{$temp["發言人電話"]}}
                </div>
                <div class='text'>
                    <b>發言日期:</b>{{$temp["發言日期"]}}
                </div>
                <div class='text'>
                    <b>發言時間:</b>{{$temp["發言時間"]}}
                </div>
                <div class='text'>
                    <b>符合條款:</b>{{$temp["符合條款"]}}
                </div>
                <div class='text'>
                    <b>說明:</b>{{$temp["說明"]["1"]}}              
                </div>
            </div>
        @endforeach  
    @endif
@else
    <div class='no-data text-center'>
        沒 有 相 關 資 訊
    </div>
@endif