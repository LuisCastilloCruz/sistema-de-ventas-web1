@extends('layouts.admin')
@section('title', 'Gestión de subcategorías')
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="m-2 float-right btn btn-primary" href="{{ route('subcategories.create') }}">Crear</a>
            <h3 class="card-footer">Sección de subcategorías</h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($subcategories as $subcategory)
                        <tr>
                            <th scope="row">{{ $subcategory->id }}</td>
                            <td>{{ $subcategory->name }}</td>
                            <td width="10px">
                                <a class="btn btn-default" href="{{ route('subcategories.show', $subcategory->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                            <td width="10px">
                                <a class="btn btn-outline-info" href="{{ route('subcategories.edit', $subcategory->id) }}">
                                    <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td width="10px">
                                {!! Form::open(['route' => ['subcategories.destroy', $subcategory->id], 'method' => 'DELETE']) !!}
                                <button class="btn btn-outline-danger delete-confirm">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $subcategories->render() }}
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
