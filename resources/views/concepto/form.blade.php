<div class="box box-info padding-1">
    <div class="box-body">
        
        <div class="form-group">
            {{ Form::label('id_concepto') }}
            {{ Form::text('id_concepto', $concepto->id_concepto, ['class' => 'form-control' . ($errors->has('id_concepto') ? ' is-invalid' : ''), 'placeholder' => 'Id Concepto']) }}
            {!! $errors->first('id_concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('codigo_concepto') }}
            {{ Form::text('codigo_concepto', $concepto->codigo_concepto, ['class' => 'form-control' . ($errors->has('codigo_concepto') ? ' is-invalid' : ''), 'placeholder' => 'Codigo Concepto']) }}
            {!! $errors->first('codigo_concepto', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('nombre') }}
            {{ Form::text('nombre', $concepto->nombre, ['class' => 'form-control' . ($errors->has('nombre') ? ' is-invalid' : ''), 'placeholder' => 'Nombre']) }}
            {!! $errors->first('nombre', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('descripcion') }}
            {{ Form::text('descripcion', $concepto->descripcion, ['class' => 'form-control' . ($errors->has('descripcion') ? ' is-invalid' : ''), 'placeholder' => 'Descripcion']) }}
            {!! $errors->first('descripcion', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</div>