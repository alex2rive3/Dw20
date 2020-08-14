<?php require_once("conex.php");

$tabla="";
$query="SELECT * FROM stock ORDER BY productos";
$sql="";

if (isset($_POST['productos'])) {
	$sql=$conn->real_escape_string($_POST['productos']);
	$query="SELECT * FROM stock WHERE 
	codigocodigo LIKE '%".$sql."%' OR
	producto LIKE '%".$sql."%' OR
	cantidad LIKE '%".$sql."%'
	costo LIKE '%".$sql."%'";
}
$buscarProductos=$conn->query($query);
if ($buscarProductos->num_rows > 0) {
	echo"<table class='table'>
          <thead class='thead-dark'>
            <tr>
              <th>Codigo</th>
              <th>Producto</th>
              <th>Stok</th>
              <th>Costo</th>
            </tr>
          </thead>";
    while ($filaProductos= $buscarProductos->fetch_assoc()) {
    	echo"<tbody>
    	<tr>
    	<td>".$filaProductos['codigo']."</td>
    	<td>".$filaProductos['producto']."</td>
    	<td>".$filaProductos['cantidad']."</td>
    	<td>".$filaProductos['costo']."</td>
    	</tr>
    	</tbody>";
    }
    echo '<table>';
}else{
	echo "No se ha encontrado lo que anda buscando";
}

?>