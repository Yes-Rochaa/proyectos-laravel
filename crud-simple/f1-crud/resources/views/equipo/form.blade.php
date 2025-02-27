<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_equipo" class="form-label">Nombre del Equipo</label>
            <input type="text" name="nombre_equipo" class="form-control @error('nombre_equipo') is-invalid @enderror" value="{{ old('nombre_equipo', $equipo?->nombre_equipo) }}" id="nombre_equipo" placeholder="Equipo">
            {!! $errors->first('nombre_equipo', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="director" class="form-label">{{ __('Director') }}</label>
            <input type="text" name="director" class="form-control @error('director') is-invalid @enderror" value="{{ old('director', $equipo?->director) }}" id="director" placeholder="Director del Equipo">
            {!! $errors->first('director', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fundacion" class="form-label">Año de Fundación</label>
            <input type="number" name="fundacion" min="1800" max="2025"   class="form-control @error('fundacion') is-invalid @enderror" value="{{ old('fundacion', $equipo?->fundacion) }}" id="fundacion" placeholder="Año">
            {!! $errors->first('fundacion', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a class="btn btn-primary" href="{{ route('equipos.index') }}">Cancelar</a>
    </div>
</div>