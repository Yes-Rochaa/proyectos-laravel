<div class="row padding-1 p-1">
    <div class="col-md-12">
        
        <div class="form-group mb-2 mb20">
            <label for="nombre_cir" class="form-label">Nombre del Circuito</label>
            <input type="text" name="nombre_cir" class="form-control @error('nombre_cir') is-invalid @enderror" value="{{ old('nombre_cir', $circuito?->nombre_cir) }}" id="nombre_cir" placeholder="Circuito">
            {!! $errors->first('nombre_cir', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="pais" class="form-label">País</label>
            <input type="text" name="pais" class="form-control @error('pais') is-invalid @enderror" value="{{ old('pais', $circuito?->pais) }}" id="pais" placeholder="País">
            {!! $errors->first('pais', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="ciudad" class="form-label">Ciudad</label>
            <input type="text" name="ciudad" class="form-control @error('ciudad') is-invalid @enderror" value="{{ old('ciudad', $circuito?->ciudad) }}" id="ciudad" placeholder="Ciudad">
            {!! $errors->first('ciudad', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="longitud_km" class="form-label">Longitud</label>
            <input type="text" name="longitud_km" class="form-control @error('longitud_km') is-invalid @enderror" value="{{ old('longitud_km', $circuito?->longitud_km) }}" id="longitud_km" placeholder="Kilometros de la Pista">
            {!! $errors->first('longitud_km', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>
        <div class="form-group mb-2 mb20">
            <label for="vultas" class="form-label">Vueltas</label>
            <input type="text" name="vultas" class="form-control @error('vultas') is-invalid @enderror" value="{{ old('vultas', $circuito?->vultas) }}" id="vultas" placeholder="Vueltas">
            {!! $errors->first('vultas', '<div class="invalid-feedback" role="alert"><strong>:message</strong></div>') !!}
        </div>

    </div>
    <div class="col-md-12 mt20 mt-2">
        <button type="submit" class="btn btn-primary">Aceptar</button>
        <a class="btn btn-primary" href="{{ route('circuitos.index') }}">Cancelar</a>
    </div>
</div>