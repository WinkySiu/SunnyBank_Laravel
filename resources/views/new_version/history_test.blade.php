@extends('layouts.app')

@section('content')
<div class='container-fluid minWidth' style='padding:0;'>
    <div class='text-center top' style='margin-top:10px'>
        <div class='col-xs-4 col-sm-4 result-top'>
            <a href="/"><img src="{{asset('storage/logo.png')}}" alt=""></a>
        </div>
        <div class='col-xs-4 col-sm-4'>
            <div class='text-center selector history-title'>
                查 詢 紀 錄
            </div>
        </div>
        <div class='col-xs-4 col-sm-4'></div>
    </div>

    <div class='table_history'>
        <table>
            <thead style="display:block;">
                <tr>
                    <th>日 期 ( 年 / 月 / 日 )</th>
                    <th>關 鍵 字</th>
                    <th>公 司 名 稱</th>
                    <th>重 要 關 係 人</th>
                    <th>重 要 客 戶</th>
                    <th>查 詢 資 料 日 期 範 圍</th>
                </tr>
            </thead>
            <tbody>
            {{$history = ""}}
            @if(count($historias) > 0)
                @foreach($historias as $history)
                <tr>
                    <td>{{$history->date}}</td>
                    <td>{{$history->keyword}}</td>
                    <td>{{$history->company}}</td>
                    <td>{{$history->relation}}</td>
                    <td>{{$history->customer}}</td>
                    <td>{{$history->date_range}}</td>
                </tr>  
                @endforeach
            @endif
            </tbody>     
        </table>
    </div>
</div>


@endsection