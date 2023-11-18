<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_ingreso') }}
            {{ Form::text('id_ingreso', $ingreso->id_ingreso, ['class' => 'form-control' . ($errors->has('id_ingreso') ? ' is-invalid' : ''), 'placeholder' => 'Id Ingreso']) }}
            {!! $errors->first('id_ingreso', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('estudiante') }}
            {{ Form::text('estudiante', $ingreso->estudiante, ['class' => 'form-control' . ($errors->has('estudiante') ? ' is-invalid' : ''), 'placeholder' => 'Estudiante']) }}
            {!! $errors->first('estudiante', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('monto') }}
            {{ Form::text('monto', $ingreso->monto, ['class' => 'form-control' . ($errors->has('monto') ? ' is-invalid' : ''), 'placeholder' => 'Monto']) }}
            {!! $errors->first('monto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('concepto') }}
            {{ Form::text('concepto', $ingreso->concepto, ['class' => 'form-control' . ($errors->has('concepto') ? ' is-invalid' : ''), 'placeholder' => 'Concepto']) }}
            {!! $errors->first('concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('divisa') }}
            {{ Form::text('divisa', $ingreso->divisa, ['class' => 'form-control' . ($errors->has('divisa') ? ' is-invalid' : ''), 'placeholder' => 'Divisa']) }}
            {!! $errors->first('divisa', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>