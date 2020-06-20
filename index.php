<!DOCTYPE html>
<html>
<head>
	<title>Codigo de barras</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="JsBarcode.all.min.js"></script>
</head>
<body>

	<div class="container">
		<div class="row">
			<h2>Generar codigo de barras con php, mysql y jsbarcode</h2>
			<div class="col-sm-4">
				<form action="php/insertar.php" method="post">
					<label>Nombre</label>
					<input type="text" id="nombre" name="nombre" class="form-control">
					<p></p>
					<button class="btn btn-primary" type="submit">
						Crear y generar nuevo codigo
					</button>
					<hr>
				</form>
			</div>
		</div>
		<?php 
	require "tabla.php";
	?>
	</div>

	<br>
	
</body>
</html>