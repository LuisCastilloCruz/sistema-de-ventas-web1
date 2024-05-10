@extends('layouts.admin')
@section('title', 'Crear Proveedores')
@section('styles')
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
    {!! Html::style('summernote/summernote.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('title', 'Registrar proveedor')

@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('providers.index') }}">Registro de Proveedor</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de proveedores</h3>
            </h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => 'providers.store', 'method' => 'POST']) !!}
                        @include('admin.providers.form.form', [
                            'btnText' => 'Registrar',
                        ])

                        
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a class="btn btn-danger float-right" href="{{route('categories.index')}}">Cancelar</a>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </div>
        {!! Form::close() !!}

    </div>
@endsection
@section('scripts')

@endsection
