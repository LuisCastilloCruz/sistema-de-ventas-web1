@extends('layouts.admin')
@section('title', 'Editar publicación')
@section('styles')
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
    {!! Html::style('summernote/summernote.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">
        <a href="{{ route('posts.index') }}">Publicaciones</a>
    </li>
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Edición de publicación</h3>
        </div>
        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}
        <div class="card-body ">
            @include('admin.posts.form.form')
            
        </div>




        {!! Form::label('', '') !!}
        <div class="row">
            <div class="col-12 grid-margin">
                <div class="card" id="gallery">
                    <div class="card-body">
                        <label for="images">Galería de imágenes
                            <small class="form-text text-muted">Solo archivos de imágenes de dimensiones 290px / 310px
                            </small>
                        </label>


                        <img class="img-fluid rounded" src="{{ $post->image->url }}" alt="">

                    </div>
                </div>
            </div>
        </div>




    </div>
    <div class="card-footer">
        <a class="btn btn-danger float-right" href="{{ route('posts.index') }}">Cancelar</a>
        <input type="submit" value="Actualizar" class="btn btn-primary">
    </div>

    {!! Form::close() !!}

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
                uploadUrl: "/upload_images_product/{{ $post->id }}/",
                showClose: false,
                uploadExtraData: {
                    '_token': $("#csrf_token").val()
                },

                initialPreview: [
                    <?php foreach ($post->images as $image) {
                        echo '"' . $image->url . '",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [<?php foreach ($post->images as $image) {
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
