@extends('layouts.app')

@section('template_title')
    {{ $concepto->name ?? "{{ __('Show') Concepto" }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">{{ __('Show') }} Concepto</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('conceptos.index') }}"> {{ __('Back') }}</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Id Concepto:</strong>
                            {{ $concepto->id_concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Codigo Concepto:</strong>
                            {{ $concepto->codigo_concepto }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre:</strong>
                            {{ $concepto->nombre }}
                        </div>
                        <div class="form-group">
                            <strong>Descripcion:</strong>
                            {{ $concepto->descripcion }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
