<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_egreso') }}
            {{ Form::text('id_egreso', $egreso->id_egreso, ['class' => 'form-control' . ($errors->has('id_egreso') ? ' is-invalid' : ''), 'placeholder' => 'Id Egreso']) }}
            {!! $errors->first('id_egreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('beneficiario') }}
            {{ Form::text('beneficiario', $egreso->beneficiario, ['class' => 'form-control' . ($errors->has('beneficiario') ? ' is-invalid' : ''), 'placeholder' => 'Beneficiario']) }}
            {!! $errors->first('beneficiario', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $egreso->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $egreso->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('divisa') }}
            {{ Form::text('divisa', $egreso->divisa, ['class' => 'form-control' . ($errors->has('divisa') ? ' is-invalid' : ''), 'placeholder' => 'Divisa']) }}
            {!! $errors->first('divisa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>