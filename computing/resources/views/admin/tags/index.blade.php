@extends('layouts.admin')
@section('title','Gestión de etiquetas ')
@section('breadcrumb')
<li class="breadcrumb-item active">@yield('title')</li>
@endsection
@section('content')
<div class="card">
	<div class="card-header">
		<a class="m-2 float-right btn btn-primary" href="{{ route('tags.create') }}">Crear</a>
	  <h3 class="card-footer">Sección de etiquetas</h3>
	</div>
	<div class="card-body table-responsive p-0">
	  <table class="table table-head-fixed">
		  <thead>
			  <tr>
				  <th scope="col">ID</th>
				  <th>Nombre</th>
				  <th colspan="3">&nbsp;</th>
			  </tr>
		  </thead>
		  <tbody>
			  @foreach ($tags as $tag)
			<tr>
				  <th scope="row">{{$tag->id}}</td>
				  <td>{{$tag->name}}</td>
			  	
			  	<td width="10px">
					<a class="btn btn-outline-info" href="{{route('tags.edit', $tag->id)}}">
                        <i class="fas fa-edit"></i>
                    </a>
				</td>
				<td width="10px">
					{!! Form::open(['route'=>['tags.destroy',$tag->id], 'method'=>'DELETE']) !!}
					<button class="btn btn-outline-danger delete-confirm">
                        <i class="fas fa-trash-alt"></i>
                    </button>
					{!! Form::close() !!}
				</td>
			</tr>
			  @endforeach
		  </tbody>
	  </table>
	{{$tags->render()}}
	</div>
  </div>
@endsection