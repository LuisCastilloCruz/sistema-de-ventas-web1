@extends('layouts.admin')
@section('title', 'Gestión de Categorias')
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="m-2 float-right btn btn-primary" href="{{ route('categories.create') }}">Crear</a>

            <h3 class="card-footer">Sección de categorías</h3>

        </div>
        <div class="card-body table-responsive p-0">
            <ul class="nav nav-tabs">
                @foreach (getModulesArray() as $module => $item)
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('categories.module', $module) }}">{{ $item }}</a>
                    </li>
                @endforeach
            </ul>
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                        <th colspan="2">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td style="width: 20%;">
                                <form method="POST" action="{{ route('categories.destroy', $category->id) }}" id="delete-item_{{ $category->id }}">

                                    @csrf
                                    @method('DELETE')
                                
                                    <a class="btn btn-outline-info" title="Editar" href="{{ route('social_medias.edit', $category->id) }}">
                                        <i class="far fa-edit"></i>
                                    </a>
                                
                                    <button class="btn btn-outline-danger" type="submit" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $categories->render() }}
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
