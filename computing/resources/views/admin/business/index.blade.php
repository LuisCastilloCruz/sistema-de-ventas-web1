@extends('layouts.admin')
@section('title','Gestión de empresa')

@section('styles')
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
    {!! Html::style('summernote/summernote.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
<style type="text/css">
    .unstyled-button {
        border: none;
        padding: 0;
        background: none;
    }
</style>
@endsection
@section('create')
<li class="nav-item d-none d-lg-flex">
    <a class="nav-link" href="#" data-toggle="modal" data-target="#exampleModal-2">
        <span class="btn btn-primary"><i class="far fa-edit"></i> Modificar información</span>
    </a>
</li>
@endsection
@section('options')
@endsection
@section('preference')
@endsection
@section('content')
<div class="content-wrapper">
    <div class="page-header">
        <h3 class="page-title">
            Gestión de empresa
        </h3>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Panel administrador</a></li>
                <li class="breadcrumb-item active" aria-current="page">Gestión de empresa</li>
            </ol>
        </nav>
    </div>


    <div class="row">
        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">
                        <i class="fas fa-chart-pie"></i>
                        Información de la empresa
                    </h4>
                    <div class="flex-grow-1 d-flex flex-column justify-content-between">
                        <strong>Nombre </strong>
                        <p class="text-muted">
                            {{$business->name}}
                        </p>
                        <strong>Descripción</strong>
                        <p class="text-muted">
                            {{$business->description}}
                        </p>
                        <strong>Dirección</strong>
                        <p class="text-muted">
                            {{$business->address}}
                        </p>
                        <strong>RUC</strong>
                        <p class="text-muted">{{$business->ruc}}</p>
                        <strong>Correo electrónico</strong>
                        <p class="text-muted">{{$business->email}}</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">
                        <i class="fas fa-chart-pie"></i>
                        Información de contacto
                    </h4>
                    <div class="flex-grow-1 d-flex flex-column justify-content-between">
                        <strong>Contacta con nosotros</strong>
                        <p class="text-muted">
                            {{$business->contact_text}}
                        </p>
                        <strong>Número telefónico</strong>
                        <p class="text-muted">
                            {{$business->phone}}
                        </p>
                        <strong>Horario de atención</strong>
                        <p class="text-muted">
                            {{$business->hours_of_operation}}
                        </p>
                        <strong>Enlace de Google Maps</strong>
                        <p class="text-muted">
                            {{$business->google_maps_link}}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h4 class="card-title">
                        <i class="fas fa-chart-pie"></i>
                        Ubicación de la empresa
                    </h4>

                    <div class="flex-grow-1 d-flex flex-column justify-content-between">

                        <div class="map-container">
                            <div id="map-with-marker" class="google-map"></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="modal fade" id="exampleModal-2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel-2"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel-2">Actualizar datos de empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>


            {!! Form::model($business,['route'=>['business.update',$business], 'method'=>'PUT','files' => true]) !!}


            <div class="modal-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="name">Nombre</label>
                            <input type="text" class="form-control" name="name" id="name" value="{{$business->name}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción</label>
                            <textarea class="form-control" name="description" id="description"
                                rows="3">{{$business->description}}</textarea>
                        </div>
                       
                        <div class="form-group">
                            <label for="address">Dirección</label>
                            <input type="text" class="form-control" name="address" id="address"
                                value="{{$business->address}}" required>
                        </div>
                        <div class="form-group">
                            <label for="ruc">Numero de RUC</label>
                            <input type="text" class="form-control" name="ruc" id="ruc" value="{{$business->ruc}}"
                                required>
                        </div>
                    </div>
                    <div class="col-md-4">

                      
                       
                        <div class="form-group">
                            <label for="contact_text">Contacta con nosotros</label>
                            <textarea class="form-control" name="contact_text" id="contact_text"
                                rows="3" required>{{$business->contact_text}}</textarea>
                        </div>

                        

                        <div class="form-group">
                            <label for="hours_of_operation">Horario de atención</label>
                            <input type="text" class="form-control" name="hours_of_operation" id="hours_of_operation"
                                value="{{$business->hours_of_operation}}" required>
                        </div>
                        <div class="form-group">
                            <label for="mail">Correo electrónico</label>
                            <input type="email" class="form-control" name="mail" id="mail" value="{{$business->email}}"
                                required>
                        </div>
                        <div class="form-group">
                            <label for="google_maps_link">Enlace de Google Maps</label>
                            <input type="url" class="form-control" name="google_maps_link" id="google_maps_link"
                                value="{{$business->google_maps_link}}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="phone">Número telefónico</label>
                            <input type="text" class="form-control" name="phone" id="phone"
                                value="{{$business->phone}}" required>
                        </div>
                        <div class="form-group">

                                    

                                    {!! Form::label('images', 'Imagenes') !!}
                                    <div class="row">
                                        <div class="col-12 grid-margin">
                                            <div class="card" id="gallery">
                                                <div class="card-body">
                                                    <label for="images">Galería de imágenes
                                                    <small class="form-text text-muted">Solo archivos de imágenes de dimensiones 290px / 310px </small>
                                                    </label> 
                                                    <div class="custom-file">
                                                        <input id="files" name="files[]" type="file" multipleaccept="image/*">
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                    
                    
                                 
                                
                        </div>


                  
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Ubicación de la empresa</label>

                            <div id="map_canvas" style="height:350px">
                            </div>

                        </div>
                    </div>
                </div>

                <input type="hidden" name="latitude" id="latitude" value="{{$business->latitude}}">
                <input type="hidden" name="length" id="longitude" value="{{$business->length}}">


            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-success">Actualizar</button>
                <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
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
    <script>
        $(document).ready(function() {

            var krajeeGetCount = function(id) {
                var cnt = $('#' + id).fileinput('getFilesCount');
                return cnt === 0 ? 'You have no files remaining.' :
                    'You have ' + cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
            };

            $("#files").fileinput({
                language: "es",
                theme: "fas",

                browseOnZoneClick: true,
                uploadUrl: "/upload_images_product/{{ $product->id }}/",
                showClose: false,
                uploadExtraData: {
                    '_token': $("#csrf_token").val()
                },

                initialPreview: [
                    <?php foreach ($product->images as $image) {
                        echo '"' . $image->url . '",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [<?php foreach ($product->images as $image) {
                    echo '{width:"120px",key:' . $image->id . '},';
                } ?>],
                overwriteInitial: false,
                maxFileSize: 2100,
                browseClass: "btn btn-primary btn-block",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                deleteUrl: "/file_delete",
                deleteExtraData: {
                    '_token': $("#csrf_token").val()
                },
            }).on('filebeforedelete', function() {
                return new Promise(function(resolve, reject) {
                    $.confirm({
                        title: 'Confirmation!',
                        content: 'Are you sure you want to delete this file?',
                        type: 'red',
                        buttons: {
                            ok: {
                                btnClass: 'btn-primary text-white',
                                keys: ['enter'],
                                action: function() {
                                    resolve();
                                }
                            },
                            cancel: function() {
                                $.alert('File deletion was aborted! ' + krajeeGetCount(
                                    'file-6'));
                            }
                        }
                    });
                });
            }).on('filedeleted', function() {
                setTimeout(function() {
                    $.alert('File deletion was successful! ' + krajeeGetCount('file-6'));
                }, 900);
            });
        });
    </script>
@endsection
