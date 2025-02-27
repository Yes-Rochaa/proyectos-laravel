@extends('layouts.app')

@section('template_title')
    Resultados
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <p class="fw-bold text-uppercase">resultados</p>
                            </span>

                             <div class="float-right">
                                <a href="{{ route('resultados.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">Registrar
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
                                        
									<th >Nombre de la Carrera </th>
									<th >Nombre del Piloto </th>
									<th >Posición Final</th>
									<th >Puntos</th>
									<th >Vueltas Completas</th>
									<th >Mejor Vuelta</th>
									<th >Estado</th>

                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($resultados as $resultado)
                                        <tr>
                                            <td>{{ ++$i }}</td>
                                            
										<td >{{ $resultado->carrera->name_carre }}</td>
										<td >{{ $resultado->piloto->nombre_pilot }}</td>
										<td >{{ $resultado->posicion_final }}</td>
										<td >{{ $resultado->puntos }}</td>
										<td >{{ $resultado->v_completas }}</td>
										<td >{{ $resultado->mejor_vuelta }}</td>
										<td >{{ $resultado->estado }}</td>

                                            <td>
                                                <form action="{{ route('resultados.destroy', $resultado->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-success" href="{{ route('resultados.edit', $resultado->id) }}"><i class="fa fa-fw fa-edit"></i> Editar</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="event.preventDefault(); confirm('¿Quieres Borarlo Definitivamente?') ? this.closest('form').submit() : false;"><i class="fa fa-fw fa-trash"></i> Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $resultados->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
