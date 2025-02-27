@extends('layouts.app')

@section('template_title')
    {{ __('Update') }} Carrera
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="">
            <div class="col-md-12">

                <div class="card card-default">
                    <div class="card-header">
                        <span class="card-title"><p class="fw-bold text-uppercase">actualizar</p></span>
                    </div>
                    <div class="card-body bg-white">
                        <form method="POST" action="{{ route('carreras.update', $carrera->id) }}"  role="form" enctype="multipart/form-data">
                            {{ method_field('PATCH') }}
                            @csrf

                            @include('carrera.form')

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
