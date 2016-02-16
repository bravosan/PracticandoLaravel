@extends('admin.template.main')

@section('title', 'Listado de Categorias')

@section('content')
	<a href="{{ Route('admin.categories.create') }}" class="btn btn-info">Registrar nueva categoria</a><hr />
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Acción</th>
		</thead>
		<tbody>
			@foreach($category as $categories)
				<tr>
					<td>{{ $categories->id }}</td>
					<td>{{ $categories->name }}</td>
					<td>
						<a href="{{ route('admin.categories.edit',$categories->id) }}" class="btn btn-warning glyphicon glyphicon-wrench" title="Editar"></a> 
						<a href="{{ route('admin.categories.destroy',$categories->id) }}" class="btn btn-danger glyphicon glyphicon-trash" title="Eliminar" onclick="return confirm('¿Seguro que desea eliminarlo?')"></a>	
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $category->render() !!}

@endsection