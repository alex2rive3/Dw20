<?php 
session_start();
require_once("libs/conex.php");
require_once("libs/setup.lib.php");
require_once("libs/productos.lib.php");

if ($_POST) {
	guardarProducto($conn, $_POST['producto'], $_POST['cantidad'], $_POST['costo']);
}
header("Location:index.php");
 ?>