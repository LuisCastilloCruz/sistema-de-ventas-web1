@extends('layouts.admin')
@section('title', 'Gestión de redes sociales')
@section('styles')
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
    {!! Html::style('summernote/summernote.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
@endsection
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="m-2 float-right btn btn-primary" href="{{route('social_medias.create')}}">Crear</a>

            <h3 class="card-footer">Sección de Redes sociales</h3>
            <div class="card-tools">
                
            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Nombre</th>
                        <th>Icono</th>
                        <th>url</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($social_medias as $social_media)
                        <tr>
                            <th scope="row">{{ $social_media->id }}</th>
                            <td>
                                {{ $social_media->name }}
                            </td>
                            <td>
                                {{ $social_media->icon }}
                            </td>
                            <td>
                                <a target="_blank" href="{{ url($social_media->url) }}">{{ url($social_media->url) }}</a>
                            </td>
                            <td style="width: 20%;">

                                <form method="POST" action="{{ route('social_medias.destroy', $social_media->id) }}" id="delete-item_{{ $social_media->id }}">
                                    @csrf
                                    @method('DELETE')
                                
                                    <a class="btn btn-outline-info" title="Editar" href="{{ route('social_medias.edit', $social_media->id) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                
                                    <button class="btn btn-outline-danger" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                                
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
@section('scripts')
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
    {!! Html::script('js/my_functions.js') !!}
    <script>
        $(document).ready(function() {
            var table = $('#social_medias_listing').DataTable({
                responsive: true,
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
                },
                dom: "<'row'<'col-sm-2'l><'col-sm-7 text-right'B><'col-sm-3'f>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: [{
                    text: '<i class="fas fa-plus"></i> Nuevo',
                    className: 'btn btn-info',
                    action: function(e, dt, node, conf) {
                        window.location.href = "{{ route('social_medias.create') }}"
                    }
                }]
            });
        });
    </script>
@endsection
