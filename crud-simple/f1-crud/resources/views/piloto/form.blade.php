<div class="row padding-1 p-1">
    <div class="col-md-12">
        
      

        <div class="form-group mb-2 mb20">
            <label for="equipo_id" class="form-label">Nombre del Equipo </label>
            <select name="equipo_id" id="equipo_id" class="form-control @error('equipo_id') is-invalid @enderror">
                <option value="">Seleccione un equipo</option>
                @foreach($equipos as $equipo)
                <option value="{{$equipo->id}}" {{ old('equipo_id', $piloto?->equipo_id) == $equipo->id ? 'selected' : ''}}>
                    {{$equipo->nombre_equipo}}
                </option>
                @endforeach
            </select>
            {!! $errors->first('equipo_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>



        <div class="form-group mb-2 mb20">
            <label for="nombre_pilot" class="form-label">Nombre del Piloto</label>
            <input type="text" name="nombre_pilot" class="form-control @error('nombre_pilot') is-invalid @enderror" value="{{ old('nombre_pilot', $piloto?->nombre_pilot) }}" id="nombre_pilot" placeholder="Nombre">
            {!! $errors->first('nombre_pilot', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="apellido" class="form-label">Apellido</label>
            <input type="text" name="apellido" class="form-control @error('apellido') is-invalid @enderror" value="{{ old('apellido', $piloto?->apellido) }}" id="apellido" placeholder="Apellido">
            {!! $errors->first('apellido', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nacimiento" class="form-label">Fecha de Nacimiento</label>
            <input type="date" name="nacimiento" class="form-control @error('nacimiento') is-invalid @enderror" value="{{ old('nacimiento', $piloto?->nacimiento) }}" id="nacimiento" placeholder="Nacimiento">
            {!! $errors->first('nacimiento', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="nacionalidad" class="form-label">Nacionalidad</label>
            <input type="text" name="nacionalidad" class="form-control @error('nacionalidad') is-invalid @enderror" value="{{ old('nacionalidad', $piloto?->nacionalidad) }}" id="nacionalidad" placeholder="Nacionalidad">
            {!! $errors->first('nacionalidad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="n_coche" class="form-label">Número de Coche</label>
            <input type="number" name="n_coche" class="form-control @error('n_coche') is-invalid @enderror" value="{{ old('n_coche', $piloto?->n_coche) }}" id="n_coche" placeholder="No Coche">
            {!! $errors->first('n_coche', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a class="btn btn-primary" href="{{ route('pilotos.index') }}">Cancelar</a>
    </div>
</div>