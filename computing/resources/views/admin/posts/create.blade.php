@extends('layouts.admin')
@section('title', 'Crear publicacion')
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
@section('title', 'Registrar publicacion')

@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('brands.index') }}"> Publicaciones</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de publicacion</h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
  {!! Form::open(['route'=>'posts.store', 'method'=>'POST','files' => true]) !!}
  @include('admin.posts.form.form',[
                        'btnText' => 'Registrar',
                    ])
  
  {!! Form::label('imágenes', 'La imágen se muestra en la sección "Editar"') !!}
  <div class="card-footer">
    <a class="btn btn-danger float-right" href="{{ route('posts.index') }}">Cancelar</a>
    <input type="submit" value="Guardar" class="btn btn-primary">
  </div>
  {!! Form::close() !!}
</div>
@endsection

@section('scripts')

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>

    {!! Html::script('fileinput/js/fileinput.min.js') !!}
    {!! Html::script('fileinput/js/locales/es.js') !!}
    {!! Html::script('fileinput/themes/fas/theme.js') !!}

    {!! Html::script('ckeditor/ckeditor.js') !!}
    <script>
        CKEDITOR.replace('long_description', {
            language: 'es',
            height: 100,

            resize_minWidth: 200,
            resize_minHeight: 300,
            resize_maxWidth: 800
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#category_id').select2();
            $('#brand_id').select2();
            $('#provider_id').select2();
            $('#tags').select2();
        });
    </script>
    
@endsection

