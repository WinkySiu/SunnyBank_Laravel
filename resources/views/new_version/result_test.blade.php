@extends('layouts.app')

@section('content')

    <div class='container-fluid minWidth' style='padding:0;'>
        <div class='text-center top' style='margin-top:10px'>
            <div class='col-xs-4 col-sm-4 result-top'>
                <a href="/"><img src="{{asset('storage/logo.png')}}" alt=""></a>
            </div>
            <div class='col-xs-4 col-sm-4'>
                <div class='text-center selector'>
                {!! Form::open(['url' => '/SetSource', 'name' => 'source-form'])!!}
                    {{ Form::hidden('keyword', $keyword) }}
                    {{ Form::hidden('company', $company) }}
                    {{ Form::hidden('relation', $relation) }}
                    {{ Form::hidden('customer', $customer) }}
                    {{ Form::hidden('source', $source) }}
                    <select name='source' id='source-select' onChange="source_submit()" value={{$source}}>
                        <option value="">請選擇</option>
                        <option value="zhigen"  @if ($source == 'zhigen')
                                                    selected="selected"
                                                @endif >植 根 法 源 網</option>
                        <option value="DongChan"  @if ($source == 'DongChan')
                                                      selected="selected"
                                                  @endif >動 產 擔 保 公 示 查 詢</option>
                        <option value="LawBank" @if ($source == 'LawBank')
                                                    selected="selected"
                                                @endif>法 源 法 律 網</option>
                        <option value="Mops"    @if ($source == 'Mops')
                                                    selected="selected"
                                                @endif>公 開 資 訊 觀 測 站</option>
                        <option value="GoogleNews" @if ($source == 'GoogleNews')
                                                       selected="selected"
                                                   @endif>G o o g l e  新 聞</option>
                    </select>
                {!! Form::close() !!}
                </div>
            </div>
            <div class='col-xs-4 col-sm-4'></div>
        </div>

        <div style='margin-top:10px;'>
            <ul class="nav nav-tabs " id="myTab" role="tablist">
                <li class="nav-item active">
                    <a class="nav-link active" id="keyword-tab" data-toggle="tab" href="#keyword" role="tab" aria-controls="keyword" aria-expanded="true">關 鍵 字</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company">公 司 名 稱</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="relation-tab" data-toggle="tab" href="#relation" role="tab" aria-controls="relation">重 要 關 係 人</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer">重 要 客 戶</a>
                </li>
            </ul>
                
            <div class="tab-content display-tab" id="myTabContent">
                <div class="tab-pane active" id="keyword" role="tabpanel" aria-labelledby="keyword-tab">
                @if ($source == 'zhigen')
                    @include('source.keyword.zhigen')
                @elseif ($source == 'DongChan')
                    @include('source.keyword.dongchan')
                @elseif ($source == 'LawBank')
                    @include('source.keyword.lawbank')
                @elseif ($source == 'Mops')
                    @include('source.keyword.mops')
                @elseif ($source == 'FaceBook')
                    @include('source.keyword.facebook')
                @elseif ($source == 'GoogleNews')
                    @include('source.keyword.google')
                @endif
                </div>

                <div class="tab-pane" id="company" role="tabpanel" aria-labelledby="company-tab">
                @if ($source == 'zhigen')
                    @include('source.company.zhigen')
                @elseif ($source == 'DongChan')
                    @include('source.company.dongchan')
                @elseif ($source == 'LawBank')
                    @include('source.company.lawbank')
                @elseif ($source == 'Mops')
                    @include('source.company.mops')
                @elseif ($source == 'FaceBook')
                    @include('source.company.facebook')
                @elseif ($source == 'GoogleNews')
                    @include('source.company.google')
                @endif
                </div>

                <div class="tab-pane" id="relation" role="tabpanel" aria-labelledby="relation-tab">
                @if ($source == 'zhigen')
                    @include('source.relation.zhigen')
                @elseif ($source == 'DongChan')
                    @include('source.relation.dongchan')
                @elseif ($source == 'LawBank')
                    @include('source.relation.lawbank')
                @elseif ($source == 'Mops')
                    @include('source.relation.mops')
                @elseif ($source == 'FaceBook')
                    @include('source.relation.facebook')
                @elseif ($source == 'GoogleNews')
                    @include('source.relation.google')
                @endif
                </div>

                <div class="tab-pane" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                @if ($source == 'zhigen')
                    @include('source.customer.zhigen')
                @elseif ($source == 'DongChan')
                    @include('source.customer.dongchan')
                @elseif ($source == 'LawBank')
                    @include('source.customer.lawbank')
                @elseif ($source == 'Mops')
                    @include('source.customer.mops')
                @elseif ($source == 'FaceBook')
                    @include('source.customer.facebook')
                @elseif ($source == 'GoogleNews')
                    @include('source.customer.google')
                @endif
                </div>

            </div>
        </div>
    </div>

    
@endsection