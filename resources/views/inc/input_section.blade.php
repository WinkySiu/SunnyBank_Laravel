{!! Form::open(['url' => '/submit']) !!}
    <div class="container">
        <div class="col-md-10 col-lg-10">
            <div>
                <div class="col-lg-4">
                    {{Form::label('keyword', '關鍵字：', ['class' => 'control-label col-lg-4'])}}
                    <div class="col-lg-8">
                        {{Form::text('keyword', '', ['class' => 'form-control', 'placeholder' => '輸入關鍵字'])}}
                    </div>
                </div>

                <div class="col-lg-8">
                    {{Form::label('', '時間：', ['class' => 'control-label col-lg-2'])}}
                    <div class="col-lg-4">
                        {{Form::text('start_date', '', ['class' => 'form-control', 'type' => 'text', 'id' => 'start-datepicker', 'placeholder' => '開始日期', 'autocomplete'=> 'off'])}}
                    </div>
                    {{Form::label('', '至', ['class' => 'control-label col-lg-1'])}}
                    <div class="col-lg-4">
                        {{Form::text('end_date', '', ['class' => 'form-control', 'type' => 'text', 'id' => 'end-datepicker', 'placeholder' => '結束日期', 'autocomplete'=> 'off'])}}
                    </div>
                </div>
            </div>

            <br>
            <br>
            
            <div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::checkbox('負債', '負債')}}負債</label>                        
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::checkbox('倒閉', '倒閉')}}倒閉</label>                        
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::checkbox('官司敗訴', '官司敗訴')}}官司敗訴</label>                        
                    </div> 
                </div>
            </div>

            <div class="">
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::checkbox('欠錢', '欠錢')}}欠錢</label>                        
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::checkbox('信用破產', '信用破產')}}信用破產</label>                        
                    </div>
                </div>

                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::checkbox('沒有信用', '沒有信用')}}沒有信用</label>                        
                    </div> 
                </div>
            </div>

            <div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::radio('source', 'zhigen', true)}} 植根法律網</label>                        
                    </div> 
                </div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::radio('source', 'DongChan', null)}} 動產擔保交易</label>                        
                    </div> 
                </div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::radio('source', 'LawBank', null)}} 法源法律網</label>                        
                    </div> 
                </div>
            </div>
            <div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::radio('source', 'Mops', null)}} 公開資訊觀測站</label>                        
                    </div> 
                </div>
            </div>
            <div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::radio('source', 'FaceBook', null)}} Facebook</label>                        
                    </div> 
                </div>
            </div>
            <div>
                <div class="col-md-4 col-lg-4 form-group checkbox-center">
                    <div class="checkbox">
                        <label>{{Form::radio('source', 'GoogleNews', null)}} Google</label>                        
                    </div> 
                </div>
            </div>
        </div>

        <div class="col-md-2 col-lg-2">
            <div>{{Form::submit('確認', ['class' => 'btn btn-primary', 'style' => 'width:100px;'])}}</div>
            <br>
            <div>{{Form::reset('重設', ['class' => 'btn btn-primary', 'style' => 'width:100px;'])}}</div>
        </div>

        
    </div>
{!! Form::close() !!}