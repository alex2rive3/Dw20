<?php 
require_once("conex.php");
require_once("setup.lib.php");

$buscar = $_POST['buscar'];

$sql = "SELECT * FROM stock WHERE codigo LIKE '%".$buscar."%' OR 
producto LIKE '%".$buscar."%' OR
cantidad LIKE '%".$buscar."%' OR
costo LIKE '%".$buscar."%'";

$SQL_query = mysqli_query($conn, $sql);
 ?>