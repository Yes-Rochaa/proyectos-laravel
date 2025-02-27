<div class="row padding-1 p-1">
    <div class="col-md-12">
        
      
        <div class="form-group mb-2 mb20">
            <label for="carrera_id" class="form-label">Carrera</label>
            <select name="carrera_id" id="carrera_id" class="form-control @error('carrera_id') is-invalid @enderror">
                <option value="">Seleccione una carrera</option>
                @foreach($carreras as $carrera)
                <option value="{{$carrera->id}}" {{ old('carrera_id', $resultado?->carrera_id) == $carrera->id ? 'selected' : ''}}>
                    {{$carrera->name_carre}}
                </option>
                @endforeach
            </select>
            {!! $errors->first('carrera_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>



        <div class="form-group mb-2 mb20">
            <label for="piloto_id" class="form-label">Nombre del Piloto </label>
            <select name="piloto_id" id="piloto_id" class="form-control @error('piloto_id') is-invalid @enderror">
                <option value="">Seleccione un piloto</option>
                @foreach($pilotos as $piloto)
                <option value="{{$piloto->id}}" {{ old('piloto_id', $resultado?->piloto_id) == $piloto->id ? 'selected' : ''}}>
                    {{$piloto->nombre_pilot}}
                </option>
                @endforeach
            </select>
            {!! $errors->first('piloto_id', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>



        <div class="form-group mb-2 mb20">
            <label for="posicion_final" class="form-label">Posición Final</label>
            <input type="number" name="posicion_final" class="form-control @error('posicion_final') is-invalid @enderror" value="{{ old('posicion_final', $resultado?->posicion_final) }}" id="posicion_final" placeholder="Posición Final">
            {!! $errors->first('posicion_final', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="puntos" class="form-label">Puntos</label>
            <input type="number" name="puntos" class="form-control @error('puntos') is-invalid @enderror" value="{{ old('puntos', $resultado?->puntos) }}" id="puntos" placeholder="Puntos">
            {!! $errors->first('puntos', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="v_completas" class="form-label">Vueltas Completas</label>
            <input type="number" name="v_completas" class="form-control @error('v_completas') is-invalid @enderror" value="{{ old('v_completas', $resultado?->v_completas) }}" id="v_completas" placeholder="Vueltas">
            {!! $errors->first('v_completas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="mejor_vuelta" class="form-label">Mejor Vuelta</label>
            <input type="text" name="mejor_vuelta" class="form-control @error('mejor_vuelta') is-invalid @enderror" value="{{ old('mejor_vuelta', $resultado?->mejor_vuelta) }}" id="mejor_vuelta" placeholder="Mejor Vuelta">
            {!! $errors->first('mejor_vuelta', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>



       


        <div class="form-group mb-2 mb20">
            <label for="estado" class="form-label">{{ __('Estado') }}</label>
            <select name="estado" id="estado" class="form-control @error('estado') is-invalid @enderror">
                <option value="">Seleccione un estado</option>
                <option value="finalizo" {{ old('estado', $resultado?->estado) == 'finalizo' ? 'selected' : '' }}>Finalizó</option>
                <option value="abandono" {{ old('estado', $resultado?->estado) == 'abandono' ? 'selected' : '' }}>Abandono</option>
                <option value="descalificado" {{ old('estado', $resultado?->estado) == 'descalificado' ? 'selected' : '' }}>Descalificado</option>
            </select>
            {!! $errors->first('estado', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a class="btn btn-primary" href="{{ route('resultados.index') }}">Cancelar</a>
    </div>
</div>