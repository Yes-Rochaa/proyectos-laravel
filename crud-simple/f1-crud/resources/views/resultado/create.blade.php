@extends('layouts.app')

@section('template_title')
    {{ __('Create') }} Resultado
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"> <p class="fw-bold text-uppercase">Registro Nuevo</p> </span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('resultados.store') }}"  role="form" enctype="multipart/form-data">
                            @csrf

                            @include('resultado.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
