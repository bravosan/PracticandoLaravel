@extends('admin.template.main')
@section('title','Listar Usuarios')
@section('content')
	<a href="{{ Route('admin.users.create') }}" class="btn btn-info">Registrar nuevo usuario</a><hr />
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{ $user->id }}</td>
					<td>{{ $user->name }}</td>
					<td>{{ $user->email }}</td>
					<td>{{ $user->type }}</td>
					<td>
						<a href="{{ route('admin.users.edit',$user->id) }}" class="btn btn-warning glyphicon glyphicon-wrench" title="Editar"></a> 
						<a href="{{ route('admin.users.destroy',$user->id) }}" class="btn btn-danger glyphicon glyphicon-trash" title="Eliminar" onclick="return confirm('¿Seguro que desea eliminarlo?')"></a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $users->render() !!}

@endsection