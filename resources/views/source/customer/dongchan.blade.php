<div class="keyword-title text-center">{{$customer}}</div>

@if(empty($customer_array['message']))
    @if(count($customer_array) > 0)
        @php 
            usort($customer_array, function($a, $b) { //Sort the array using a user defined function
                return $a["契約啟始日期"] > $b["契約啟始日期"] ? -1 : 1; //Compare the scores
            });
        @endphp

        @foreach($customer_array as $temp)
            @if(!empty($temp["message"]))
                {{$temp["message"]}}
            @else
            <div class='history-data'>
                <div class='text'>
                    <b>債務人(買受人、受託人)名稱：</b>{{$temp["債務人(買受人、受託人)名稱"]}}
                </div>
                <div class='text'>
                    <b>契約啟始日期：</b>{{$temp["契約啟始日期"]}}
                </div>
                <div class='text'>
                    <b>契約終止日期：</b>{{$temp["契約終止日期"]}}
                </div>
                <div class='text'>
                    <b>抵押權人(出賣人、信託人)名稱：</b>{{$temp["抵押權人(出賣人、信託人)名稱"]}}
                </div>
                <div class='text'>
                    <b>擔保債權金額：</b>{{$temp["擔保債權金額"]}}
                </div>
                <div class='text'>
                    <b>案件類別：</b>{{$temp["案件類別"]}}
                </div>
                <div class='text'>
                    <b>標的物種類：</b>{{$temp["標的物種類"]}}
                </div>
            </div>
            @endif
        @endforeach
    @endif
@else
    <div class='no-data text-center'>
        沒 有 相 關 資 訊
    </div>
@endif