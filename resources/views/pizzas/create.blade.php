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
	<h3 class="text-muted display-4">Ingresando...</h3>
	<hr>
	<form action="{{ url('/pizzas') }}" method="post">
		{{ csrf_field() }}
		<div class="form-group row">
			<label for="Tipo" class="col-sm-2 col-form-label">{{ 'Tipo' }}</label>
			<div class="col-sm-10">
				<input type="text" name="Tipo" id="Tipo" value="" class="form-control form-control-sm">
			</div>
		</div>
		<br>
		<div class="form-group row">
			<label for="Ingredientes" class="col-sm-2 col-form-label">{{ 'Ingredientes' }}</label>
			<div class="col-sm-10">
				<input type="text" name="Ingredientes" id="Ingredientes" value="" class="form-control form-control-sm">
			</div>
		</div>
		<br>
		<div class="form-group row">
			<label for="Cantidad" class="col-sm-2 col-form-label">{{ 'Cantidad' }}</label>
			<div class="col-sm-10">
				<input type="number" name="Cantidad" id="Cantidad" value="" class="form-control form-control-sm">
			</div>
		</div>
		<br>
		<div class="form-group row">
			<label for="Precio" class="col-sm-2 col-form-label">{{ 'Precio' }}</label>
			<div class="col-sm-10">
				<input type="number" step="any" name="Precio" id="Precio" value="" class="form-control form-control-sm">
			</div>
		</div>
		<br>
		<input type="submit" value="Ingresar" class="btn btn-outline-primary btn-sm">
		<a href="{{ url('pizzas') }}" class="btn btn-outline-secondary btn-sm">Volver</a>
	</form>
</div>
</body>
</html>