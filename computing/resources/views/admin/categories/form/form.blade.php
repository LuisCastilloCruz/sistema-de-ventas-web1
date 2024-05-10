<div class="form-goup">
    {!! Form::label('name', 'Nombre') !!}
    {!! Form::text('name', null,['class'=>'form-control']) !!}
</div>
<div class="form-goup">
    {!! Form::label('name', 'Modulo') !!}
    {!! Form::select('module', getModulesArray(), null, ['class'=>'form-control']) !!}
</div>