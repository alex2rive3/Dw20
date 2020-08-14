<?php 
session_start();
require_once("libs/conex.php");
require_once("libs/setup.lib.php");
require_once("libs/busqueda.php");
require_once("libs/productos.lib.php");
$datos=TodoProductos($conn);
if ($_POST) {
	$busqueda=buscar($conn, $_POST['buscar']);
}else{
	$busqueda=buscar($conn, null);
}?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Control de Stock RB </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

	<!-- JS, Popper.js, and jQuery -->
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</head>
<body>
	<div class="continer" >
		<?php include("navbar.php"); ?>
	<!--FORMULARIO PARA AGREGAR NUEVOS ITEM -->
	<div class="row">
	<!-- INCLUIR NAVBAR EN ESTA PARTE-->
		<aside class="col-3">
			<h4>Guardar Productos Nuevos</h4>
			<form action="procesar.php" method="post">
				<input type="text" name="producto" placeholder="Producto" class="form-control" required=""><br>
				<input type="number" name="cantidad" placeholder="Cantidad" class="form-control" required=""><br>
				<input type="costo" name="costo" placeholder="Costo de mercaderia" class="form-control" required=""><br>
				<button type="submit" class="btn btn-primary btn-lg btn-block">Guardar</button>
			</form>
		</aside>
	<!--Tabla para imprimir todo el contenido de la base de datos-->
		<div class="col-8">
			<div class="card" style="width: 60%;">
				<div>
					<h4>Productos Encontrados</h4>
					<table border="1" class="table">
						<tbody>
							<thead class="thead-dark">
								<th>Codigo</th>
								<th>Producto</th>
								<th>Cantidad</th>
								<th>Precio</th>
								<th><a href="index.php">Nuevo</a></th>
							</thead>
							<?php 
							foreach ($busqueda as $b) {?>
								<tr>
									<td><?=$b['id']?></td>
									<td><?=$b['producto'] ?></td>
									<td><?=$b['cantidad']?></td>
									<td><?=$b['costo']?></td>
									<td><a href="F_editar.php?id=<?php echo $b['id'] ?>">Editar</a></td>
								</tr>
							<?php }?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
	</div>
</body>
</html>	