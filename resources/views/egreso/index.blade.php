@extends('layouts.app')

@section('template_title')
    Egreso
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Egreso') }}
                            </span>

                             <div class="float-right">
                                <a href="{{ route('egresos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
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
                                        
										<th>Id Egreso</th>
										<th>Beneficiario</th>
										<th>Concepto</th>
										<th>Monto</th>
										<th>Divisa</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($egresos as $egreso)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
											<td>{{ $egreso->id_egreso }}</td>
											<td>{{ $egreso->beneficiario }}</td>
											<td>{{ $egreso->concepto }}</td>
											<td>{{ $egreso->monto }}</td>
											<td>{{ $egreso->divisa }}</td>

                                            <td>
                                                <form action="{{ route('egresos.destroy',$egreso->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('egresos.show',$egreso->id) }}"><i class="fa fa-fw fa-eye"></i> {{ __('Show') }}</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('egresos.edit',$egreso->id) }}"><i class="fa fa-fw fa-edit"></i> {{ __('Edit') }}</a>
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
                {!! $egresos->links() !!}
            </div>
        </div>
    </div>
@endsection
