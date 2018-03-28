@extends('layouts.app')

@section('content')
<div class='container'>
    <div class='row text-center'>
        <div class='col-xs-2 col-sm-2'></div>
        <div class='col-xs-8 col-sm-8 logo'>
            <img src="{{asset('storage/logo.png')}}" alt="">
        </div>
        <div class='col-xs-2 col-sm-2 history-link'>
            <a href="/History" target="_blank">查 詢 紀 錄</a>
        </div>
    </div>

    {!! Form::open(['url' => '/submit', 'name' => 'input-form', 'target' => '_blank', 'onsubmit' => 'return form_check()']) !!}
    <div class='row text-center margin-top'>
        <div>
            <div class='col-xs-5 col-sm-5'>
                {{Form::text('keyword', '', ['class' => 'form-control input-type left-input', 'placeholder' => '關 鍵 字'])}}
            </div>
            <div class='col-xs-7 col-sm-7' style='padding:0;'>
                <div class='col-xs-5 col-sm-5'>
                {{Form::text('startDate', '', ['class' => 'form-control date-input left-input', 'type' => 'text', 'id' => 'start-datepicker', 'placeholder' => '開 始 日 期', 'autocomplete'=> 'off'])}}
                </div>
                <div class='col-xs-2 col-sm-2'>
                    {{Form::label('', '至', ['class' => 'control-label date-label'])}}
                </div>
                <div class='col-xs-5 col-sm-5'>
                {{Form::text('endDate', '', ['class' => 'form-control date-input right-input', 'type' => 'text', 'id' => 'end-datepicker', 'placeholder' => '結 束 日 期', 'autocomplete'=> 'off'])}}
                </div>
            </div>
        </div>
    </div>

    <div class='row text-center margin-top'>
        <div>
            <div class='col-xs-4 col-sm-4'>
                {{Form::text('company', '', ['class' => 'form-control input-type left-input', 'placeholder' => '公 司 名 稱'])}}
            </div>
            <div class='col-xs-4 col-sm-4'>
                {{Form::text('relation', '', ['class' => 'form-control input-type center-input', 'placeholder' => '重 要 關 係 人'])}}
            </div>
            <div class='col-xs-4 col-sm-4'>
                {{Form::text('customer', '', ['class' => 'form-control input-type right-input', 'placeholder' => '重 要 客 戶'])}}
            </div>
        </div>
    </div>

    <div class='row text-center' style='margin-top:40px;'>
        <div>
            <div class='col-xs-3 col-sm-3'></div>
            <div class='col-xs-3 col-sm-3'>
                {{Form::submit('確 認', ['class' => 'btn btn-primary btn-init'])}}
            </div>
            <div class='col-xs-3 col-sm-3'>
                {{Form::reset('重 設', ['class' => 'btn btn-primary btn-init'])}}
            </div>
            <div class='col-xs-3 col-sm-3'></div>
        </div>
    </div>
    {!! Form::close() !!}

    <div class='line'></div>

    {!! Form::open(['url' => '/FBSubmit', 'name' => 'fb-form', 'target' => '_blank', 'onsubmit' => 'return form_fb_check()']) !!}
    <div class='row text-center'>
        <div>
            <div class='col-xs-12 col-sm-12'>
                {{Form::label('', 'Facebook 頁 面 查 詢', ['class' => 'control-label'])}}
            </div>
        </div>
        <div>
            <div class='col-xs-12 col-sm-12 margin-top'>
                {{Form::text('fb-id', '', ['class' => 'form-control input-type fb-input center-input', 'placeholder' => 'Facebook 粉絲專頁 ID'])}}
            </div>
        </div>
    </div>

    <div class='row text-center' style='margin-top:40px;'>
        <div>
            <div class='col-xs-3 col-sm-3'></div>
            <div class='col-xs-3 col-sm-3'>
                {{Form::submit('確 認', ['class' => 'btn btn-primary btn-init'])}}
            </div>
            <div class='col-xs-3 col-sm-3'>
                {{Form::reset('重 設', ['class' => 'btn btn-primary btn-init'])}}
            </div>
            <div class='col-xs-3 col-sm-3'></div>
        </div>
    </div>

    <div class='line'></div>
    {!! Form::close() !!}
</div>

@endsection