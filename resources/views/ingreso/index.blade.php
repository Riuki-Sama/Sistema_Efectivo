@extends('layouts.app')

@section('template_title')
    Ingreso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Ingreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('ingresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Create New') }}
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Id Ingreso</th>
										<th>Estudiante</th>
										<th>Monto</th>
										<th>Concepto</th>
										<th>Divisa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ingresos as $ingreso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $ingreso->id_ingreso }}</td>
											<td>{{ $ingreso->estudiante }}</td>
											<td>{{ $ingreso->monto }}</td>
											<td>{{ $ingreso->concepto }}</td>
											<td>{{ $ingreso->divisa }}</td>

                                            <td>
                                                <form action="{{ route('ingresos.destroy',$ingreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('ingresos.show',$ingreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('ingresos.edit',$ingreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> {{ __('Delete') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $ingresos->links() !!}
            </div>
        </div>
    </div>
@endsection
