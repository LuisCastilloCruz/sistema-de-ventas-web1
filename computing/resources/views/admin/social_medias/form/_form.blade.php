{!! Form::hidden('user_id', auth()->user()->id) !!}
<div class="form-row">
    <div class="col-md-6 mb-3">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>
    @error('file')
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @enderror
</div>
<div class="form-row">
    <div class="col-md-6 mb-3">
        {!! Form::label('url', 'Enlace de la pagina') !!}
        {!! Form::text('url', null, ['class' => 'form-control']) !!}
    </div>
    @error('file')
        <div class="alert alert-danger" role="alert">
            <strong>{{ $message }}</strong>
        </div>
    @enderror
</div>


<div class="form-group">
    <label for="icon">Icono</label>
    <select class="form-control" name="icon" id="icon">
        <option value="" selected>-- Seleccione un icono --</option>
        @foreach (getIconsArray() as $icon)
            <option value="{{ $icon }}">{{ $icon }}</option>
        @endforeach

    </select>
</div>

<button type="submit" class="btn btn-primary mr-2">{{ __($btnText) }}</button>
<a href="{{ URL::previous() }}" class="btn btn-light">
    Cancelar
</a>
