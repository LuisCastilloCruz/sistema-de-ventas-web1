@extends('layouts.admin')
@section('title', 'Crear Marcas')
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
@section('title', 'Registrar Marcas')

@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('brands.index') }}">Registro de Marcas</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Registro de Marcas</h3>
        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        {!! Form::open(['route' => 'brands.store', 'method' => 'POST', 'files' => true]) !!}
                        @include('admin.brands.form.form', [
                            'brand' => new \App\Brand(),
                            'btnText' => 'Registrar',
                        ])
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    {!! Html::script('fileinput/js/fileinput.min.js') !!}
    {!! Html::script('fileinput/js/locales/es.js') !!}
    {!! Html::script('fileinput/themes/fas/theme.js') !!}
    <script>
        $(document).ready(function() {
            $("#file").fileinput({
                language: "es",
                theme: "fas",
                browseOnZoneClick: true,
                overwriteInitial: true,
                maxFileSize: 2500,
                showClose: false,
                showCaption: false,
                browseLabel: '',
                removeLabel: '',
                browseIcon: '<i class="far fa-folder-open"></i>',
                removeIcon: '<i class="fas fa-times"></i>',
                removeTitle: 'Cancel or reset changes',
                elErrorContainer: '#kv-avatar-errors-1',
                msgErrorClass: 'alert alert-block alert-danger',

                layoutTemplates: {
                    main2: '{preview} ' + ' {remove} {browse}'
                },
                allowedFileExtensions: ["jpg", "png", "gif"],
                maxImageWidth: 160,
                maxImageHeight: 65
            });
        });
    </script>
@endsection
