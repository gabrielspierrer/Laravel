<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Pizzas CRUD</title>
</head>
<body>
<div class="container">
	<h1 class="text-muted display-3">Pizzas CRUD</h1>
	<hr>
	<div class="d-grid gap-2 d-md-flex">
		<a href="{{ url('pizzas/create') }}" class="btn btn-outline-primary btn-sm mr-1">Ingresar Pizzas</a>
		<a href="{{ url('/') }}" class="btn btn-outline-secondary btn-sm mr-3">Volver</a>
		<form action="/search" method="get">
			<div class="input-group">
				<input type="search" name="search" placeholder="Buscar..." class="form-control form-control-sm mr-1">
				<button type="submit" class="btn btn-outline-primary btn-sm">Buscar</button>
			</div>
		</form>
	</div>
	<hr>
	<table class="table table-bordered table-hover table-sm">
		<thead class="thead-light">
			<tr>
				<th scope="col">#</th>
				<th scope="col">Tipo</th>
				<th scope="col">Ingredientes</th>
				<th scope="col">Cantidad</th>
				<th scope="col">Precio</th>
				<th scope="col">Acciones</th>
			</tr>
		</thead>
		<tbody>
		@foreach($pizzas as $pizza)
			<tr>
				<th scope="row">{{ $loop->iteration }}</th>
				<td>{{ $pizza->tipo }}</td>
				<td>{{ $pizza->ingredientes }}</td>
				<td>{{ $pizza->cantidad }}</td>
				<td>{{ $pizza->precio }}</td>
				<td>
					<div class="d-grid gap-2 d-md-flex">
						<a href="{{ url('/pizzas/'.$pizza->id.'/edit') }}" class="btn btn-outline-warning btn-sm mr-1">Editar</a>
						<form method="post" action="{{ url('/pizzas/'.$pizza->id) }}">
						{{ csrf_field() }}
						{{ method_field('DELETE') }}
							<button type="submit" onclick="return confirm('¿Esta seguro de que desea eliminar esto?');" class="btn btn-outline-danger btn-sm">Eliminar</button>
						</form>
					</div>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
	<div class="pagination pagination-sm">
   		{{ $pizzas->links() }}
    </div>
</div>
</body>
</html>