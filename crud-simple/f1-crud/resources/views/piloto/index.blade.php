@extends('layouts.app')

@section('template_title')
    Pilotos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <p class="fw-bold text-uppercase">pilotos</p>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('pilotos.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">Registrar
                                </a>
                              </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success m-4">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body bg-white">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
									<th >Nombre del Equipo</th>
									<th >Nombre del Piloto</th>
									<th >Apellido</th>
									<th >Fecha de Nacimiento</th>
									<th >Nacionalidad</th>
									<th >Número de Coche</th>

                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pilotos as $piloto)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $piloto->equipo->nombre_equipo}}</td>
										<td >{{ $piloto->nombre_pilot }}</td>
										<td >{{ $piloto->apellido }}</td>
										<td >{{ $piloto->nacimiento }}</td>
										<td >{{ $piloto->nacionalidad }}</td>
										<td >{{ $piloto->n_coche }}</td>

                                            <td>
                                                <form action="{{ route('pilotos.destroy', $piloto->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('pilotos.edit', $piloto->id) }}"><i class="fa fa-fw fa-edit"></i>Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Quieres Borarlo Definitivamente?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i>Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $pilotos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
