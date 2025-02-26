@extends('layouts.admin')
@section('title', 'Gestión de marcas')
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">

        <div class="card-header">
            <a class="m-2 float-right btn btn-primary" href="{{ route('brands.create') }}">Crear</a>
            <h3 class="card-footer">Sección de marcas</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Imagen</th>
                        <th>Acciones</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($brands as $brand)
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>
                                {{ $brand->name }}
                            </td>
                            <td>{{ $brand->description }}</td>
                            <td class="py-1">
                                <img src="{{ $brand->image->url }}" class="img-sm">
                            </td>
                            <td>
                                <form method="POST" action="{{ route('brands.destroy', $brand) }}"
                                    id="delete-item_{{ $brand->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <a class="btn btn-outline-info" href="{{ route('brands.edit', $brand) }}"
                                        title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <button class="btn btn-outline-danger delete-confirm" type="button"
                                        onclick="confirmDelete('delete-item_{{ $brand->id }}')" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.7.0/js/buttons.bootstrap4.min.js"></script>
    {!! Html::script('js/my_functions.js') !!}
    <script>
        $(document).ready(function() {
            var table = $('#brands_listing').DataTable({
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
                        window.location.href = "{{ route('brands.create') }}"
                    }
                }]
            });
        });
    </script>
@endsection
