<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        
            <div class="form-group mb-2 mb20">
                <label for="circuito_id" class="form-label">Nombre del Circuito</label>
                <select name="circuito_id" id="circuito_id" class="form-control @error('circuito_id') is-invalid @enderror">
                    <option value="">Seleccione un circuito</option>
                    @foreach($circuitos as $circuito)
                        <option value="{{ $circuito->id }}" {{ old('circuito_id', $carrera?->circuito_id) == $circuito->id ? 'selected' : '' }}>
                            {{ $circuito->nombre_cir }}
                        </option>
                    @endforeach
                </select>
                {!! $errors->first('circuito_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
            </div>
        




        <div class="form-group mb-2 mb20">
            <label for="name_carre" class="form-label">Carrera</label>
            <input type="text" name="name_carre" class="form-control @error('name_carre') is-invalid @enderror" value="{{ old('name_carre', $carrera?->name_carre) }}" id="name_carre" placeholder="Nombre de la Carrera">
            {!! $errors->first('name_carre', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="fecha" class="form-label">{{ __('Fecha') }}</label>
            <input type="date" name="fecha" class="form-control @error('fecha') is-invalid @enderror" value="{{ old('fecha', $carrera?->fecha) }}" id="fecha" placeholder="Fecha">
            {!! $errors->first('fecha', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="temporada" class="form-label">{{ __('Temporada') }}</label>
            <input type="number" name="temporada" min="1800" max="2025"  class="form-control @error('temporada') is-invalid @enderror" value="{{ old('temporada', $carrera?->temporada) }}" id="temporada" placeholder="Año de la Temporada">
            {!! $errors->first('temporada', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Registrar</button>
        <a class="btn btn-primary" href="{{ route('carreras.index') }}">Cancelar</a>
    </div>
</div>