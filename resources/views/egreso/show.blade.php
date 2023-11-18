@extends('layouts.app')

@section('template_title')
    {{ $egreso->name ?? "{{ __('Show') Egreso" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Egreso</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('egresos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Egreso:</strong>
                            {{ $egreso->id_egreso }}
                        </div>
                        <div class="form-group">
                            <strong>Beneficiario:</strong>
                            {{ $egreso->beneficiario }}
                        </div>
                        <div class="form-group">
                            <strong>Concepto:</strong>
                            {{ $egreso->concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Monto:</strong>
                            {{ $egreso->monto }}
                        </div>
                        <div class="form-group">
                            <strong>Divisa:</strong>
                            {{ $egreso->divisa }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
