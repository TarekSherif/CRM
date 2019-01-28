<div class="panel-body">
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('f_name', trans('CRM.employee.fields.f-name').'*', ['class' => 'control-label']) !!}
                {!! Form::text('f_name', old('f_name'), ['class' => 'form-control', 'placeholder' => trans('CRM.employee.fields.f-name'), 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('f_name'))
                    <p class="help-block">
                        {{ $errors->first('f_name') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('l_name', trans('CRM.employee.fields.l-name').'*', ['class' => 'control-label']) !!}
                {!! Form::text('l_name', old('l_name'), ['class' => 'form-control', 'placeholder' => trans('CRM.employee.fields.l-name'), 'required' => '']) !!}
                <p class="help-block"></p>
                @if($errors->has('l_name'))
                    <p class="help-block">
                        {{ $errors->first('l_name') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('email', trans('CRM.employee.fields.email').'', ['class' => 'control-label']) !!}
                {!! Form::email('email', old('email'), ['class' => 'form-control', 'placeholder' => trans('CRM.employee.fields.email')]) !!}
                <p class="help-block"></p>
                @if($errors->has('email'))
                    <p class="help-block">
                        {{ $errors->first('email') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('phone', trans('CRM.employee.fields.phone').'', ['class' => 'control-label']) !!}
                {!! Form::text('phone', old('phone'), ['class' => 'form-control', 'placeholder' => trans('CRM.employee.fields.phone')]) !!}
                <p class="help-block"></p>
                @if($errors->has('phone'))
                    <p class="help-block">
                        {{ $errors->first('phone') }}
                    </p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 form-group">
                {!! Form::label('cid_id', trans('CRM.employee.fields.cid').'', ['class' => 'control-label']) !!}
                {!! Form::select('cid_id', $cids, old('cid_id'), ['class' => 'form-control select2']) !!}
                <p class="help-block"></p>
                @if($errors->has('cid_id'))
                    <p class="help-block">
                        {{ $errors->first('cid_id') }}
                    </p>
                @endif
            </div>
        </div>
        
    </div>