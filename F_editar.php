<?php 
session_start();
require_once("libs/conex.php");
require_once("libs/setup.lib.php");
require_once("libs/productos.lib.php");
if ($_GET) {
	$dateId=idProductos($conn, $_GET['id']);
}

 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar Producto</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<h4>Ajustar cantidad del Producto</h4>
		<form action="procesar.php" method="post">
			<input type="text" name="producto" placeholder="Producto" class="form-control"><br>
			<input type="number" name="cantidad" placeholder="Cantidad" class="form-control"><br>
			<input type="costo" name="costo" placeholder="Costo de mercaderia" class="form-control"><br>
			<button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
		</form>
	</div>
</body>
</html>