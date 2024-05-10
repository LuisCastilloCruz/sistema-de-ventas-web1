@extends('layouts.admin')
@section('title','Editar Proveedores')
@section('breadcrumb')
<li class="breadcrumb-item active">
	<a href="{{route('providers.index')}}">Proveedores</a>
</li>
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
	  <h3 class="card-title">Edición de proveedor</h3>
    </div>
    {!! Form::model($provider, ['route'=>['providers.update',$provider->id],'method'=>'PUT','files' => true]) !!}
	<div class="card-body ">
		@include('admin.providers.form.form')
	</div>
	<div class="card-footer">
      <a class="btn btn-danger float-right" href="{{route('providers.index')}}">Cancelar</a>
      <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>
    {!! Form::close() !!}
  </div>
@endsection