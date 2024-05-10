
<div class="form-row">
    <div class="col-md-6 mb-3">
        {!! Form::label('name', 'Nombre') !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-6 mb-3">
        {!! Form::label('email', 'Correo Electronico') !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}


    </div>

</div>


<div class="form-row">
    <div class="col-md-6 mb-3">
        {!! Form::label('ruc_number', 'Numero de Ruc') !!}
        {!! Form::text('ruc_number', null, ['class' => 'form-control']) !!}
    </div>

    <div class="col-md-6 mb-3">
        {!! Form::label('address', 'Direccion') !!}
        {!! Form::text('address', null, ['class' => 'form-control']) !!}


    </div>

</div>

<div class="col-md-3 mb-1">
    {!! Form::label('phone', 'Numero de Contacto') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

