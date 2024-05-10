@extends('layouts.admin')
@section('title', 'Gestión de publicaciones')
@section('breadcrumb')
    <li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <a class="m-2 float-right btn btn-primary" href="{{ route('posts.create') }}">Crear</a>

            <h3 class="card-footer">Sección de publicaciones</h3>
        </div>
        <div class="card-body table-responsive p-0">
            <table class="table table-head-fixed">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th>Título</th>
                        <th>Estado</th>
                        <th>Fecha de publicación</th>
                        <th>Categoría</th>
                        <th>Acciones</th>

                        <th colspan="3">&nbsp;</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</td>
                            <td>{{ $post->name }}</td>
                            <td>{{ $post->status }}</td>
                            <td>{{ $post->created_at }}</td>
                            <td>{{ $post->category->name }}</td>



                            <td style="width: 20%;">
                                <a class="btn btn-default" href="{{ route('posts.show', $post->id) }}">
                                    <i class="fas fa-eye"></i>
                                </a>

                                <form method="POST" action="{{ route('posts.destroy', $post) }}"
                                    id="delete-item_{{ $post->id }}">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <a class="btn btn-outline-info" href="{{ route('posts.edit', $post) }}"
                                        title="Editar">
                                        <i class="far fa-edit"></i>
                                    </a>

                                    <button class="btn btn-outline-danger delete-confirm" type="button"
                                        onclick="confirmDelete('delete-item_{{ $post->id }}')" title="Eliminar">
                                        <i class="far fa-trash-alt"></i>
                                    </button>

                                </form>
                            </td>



                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $posts->render() }}
        </div>
        <div class="card-footer">
            Footer
        </div>
    </div>
@endsection
