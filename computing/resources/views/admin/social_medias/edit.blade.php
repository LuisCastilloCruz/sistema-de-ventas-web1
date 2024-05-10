@extends('layouts.admin')
@section('title', 'Editar Redes Sociales')
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
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('social_medias.index') }}">Redes Sociales</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            
            <h3 class="card-title">Edición de Red Social</h3>

        </div>
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">

                        {!! Form::model($social_media, ['route' => ['social_medias.update', $social_media], 'method' => 'PUT']) !!}
                        @include('admin.social_medias.form._form', [
                            'btnText' => 'Actualizar',
                        ])
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        $(document).ready(function() {
            $('#icon').select2();
        });
    </script>
@endsection
