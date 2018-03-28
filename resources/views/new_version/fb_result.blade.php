@extends('layouts.app')

@section('content')

    <div class='container-fluid minWidth' style='padding:0;'>
        <div class='text-center top' style='margin-top:10px'>
            <div class='col-xs-4 col-sm-4 result-top'>
                <a href="/"><img src="{{asset('storage/logo.png')}}" alt=""></a>
            </div>
            <div class='col-xs-4 col-sm-4'>
                <div class='text-center keyword-title' style='line-height:80px;font-weight:blod;'>
                    F a c e b o o k  粉 絲 專 頁
                </div>
            </div>
            <div class='col-xs-4 col-sm-4'></div>
        </div>

        <div style='margin-top:10px;'>
            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" id="keyword-tab" data-toggle="tab" href="#keyword" role="tab" aria-controls="keyword" aria-expanded="true">F a c e b o o k  粉 絲 專 頁 I D</a>
                </li>
            </ul>
                
            <div class="tab-content display-tab" id="myTabContent">
                <div class="tab-pane active" id="keyword" role="tabpanel" aria-labelledby="keyword-tab">
                    @include('source.keyword.facebook')
                </div>
            </div>
        </div>
    </div>

    
@endsection