@extends('layouts.app')

@section('content')
<ul class="nav nav-tabs" id="myTab" role="tablist">
    <li class="nav-item active">
        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-expanded="true">查詢結果</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile">搜尋引擎</a>
    </li>

    <li class="nav-item">
        <a class="nav-link" id="history-tab" data-toggle="tab" href="#history" role="tab" aria-controls="history">查詢紀錄</a>
    </li>
</ul>
    
<div class="tab-content display-tab" id="myTabContent">
    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab">
        @if ($source == 'zhigen')
            @include('source.zhigen')
        @elseif ($source == 'DongChan')
            @include('source.dongchan')
        @elseif ($source == 'LawBank')
            @include('source.lawbank')
        @elseif ($source == 'Mops')
            @include('source.mops')
        @elseif ($source == 'FaceBook')
            @include('source.facebook')
        @elseif ($source == 'GoogleNews')
            @include('source.google')
        @endif
        
    </div>
    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        @include('source.search_engine')
    </div>

    <div class="tab-pane" id="history" role="tabpanel" aria-labelledby="history-tab">
        @include('inc.history')
    </div>

</div>
@endsection