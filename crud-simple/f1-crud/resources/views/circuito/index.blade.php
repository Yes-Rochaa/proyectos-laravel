@extends('layouts.app')

@section('template_title')
    Circuitos
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                <p class="fw-bold text-uppercase">circuitos</p>
                            </span>

                            <div class="float-right">
                                <a href="{{ route('circuitos.create') }}" class="btn btn-primary btn-sm float-right"
                                    data-placement="left">Registrar             </a>
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

                                        <th>Nombre del Circuito</th>
                                        <th>País</th>
                                        <th>Ciudad</th>
                                        <th>Longitud</th>
                                        <th>Vueltas</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($circuitos as $circuito)
                                        <tr>
                                            <td>{{ ++$i }}</td>

                                            <td>{{ $circuito->nombre_cir }}</td>
                                            <td>{{ $circuito->pais }}</td>
                                            <td>{{ $circuito->ciudad }}</td>
                                            <td>{{ $circuito->longitud_km }}</td>
                                            <td>{{ $circuito->vultas }}</td>

                                            <td>
                                                <form action="{{ route('circuitos.destroy', $circuito->id) }}"
                                                    method="POST">
                                                    <a class="btn btn-sm btn-success"
                                                        href="{{ route('circuitos.edit', $circuito->id) }}"><i
                                                            class="fa fa-fw fa-edit"></i> {{ __('Editar') }}</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"
                                                        onclick="event.preventDefault(); confirm('¿Quieres Borarlo Definitivamente?') ? this.closest('form').submit() : false;"><i
                                                            class="fa fa-fw fa-trash"></i> {{ __('Eliminar') }}</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $circuitos->withQueryString()->links() !!}
            </div>
        </div>
    </div>
@endsection
