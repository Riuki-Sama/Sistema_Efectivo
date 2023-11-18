@extends('layouts.app')

@section('template_title')
    {{ $ingreso->name ?? "{{ __('Show') Ingreso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Ingreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ingresos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Ingreso:</strong>
                            {{ $ingreso->id_ingreso }}
                        </div>
                        <div class="form-group">
                            <strong>Estudiante:</strong>
                            {{ $ingreso->estudiante }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $ingreso->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $ingreso->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Divisa:</strong>
                            {{ $ingreso->divisa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
