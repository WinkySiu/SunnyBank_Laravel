{{$temp = ""}}
@if(count($historias) > 0)
    @foreach($historias as $history)
        
        @if ($temp!=substr($history->date, 0, 10)) 
            @php $temp = substr($history->date, 0, 10); @endphp
            <div class='history-date text-center'>
                {{$temp}}
            </div>
        @endif

        <div class='history-data'>
            <div class='title text'>
                <a target="_blank" href="{{$history->url}}">{{$history->title}}</a>
            </div>
            <div class='text'>
                {{$history->source}}
            </div>
            <div class='text'>
                {{$history->date}}
            </div>
        </div>
    @endforeach
@endif

