<?php
//Todos los datos ejecuados despues de esta linea se garda en el SESSION
session_start(); //Genera un ID

//Pregunta si es que no existe una sesion
if (!$_SESSION['persona']){
  $_SESSION['persona']=[]; //se genera un array datos con un array vacio
}

//El metodo post esconde las informaciones mandadas al servidor
//Post se usa cuando se tiene que guaradar y modificar los datos y es enviado de forma segura en algunos casos depende del proceso http va encriptado

 if ($_POST)
 {
   //ARRAY PUSH es utilizado para cargar el array con los datos de la secion en la variable SESSION
   array_push($_SESSION['persona'],
   [
     // la => indica en en donde se debe guardar un valor
     "apellido"=> $_POST['apellido'],
     "nombre"=> $_POST['nombre'], //se captura el valor de nombre en la clave "nombre del array"
     "fenac"=> $_POST['fenac']
    ]);
 }

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tarea 10</title>
    <script src="libs\Jquery\jquery-3.5.0.min.js" charset="utf-8"></script>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>

  <body>
<nav class="navbar navbar-light bg-light">
  <a class="navbar-brand" href="#">Datos</a>
</nav>
<br>
<div class="container">
  <div class="card">
    <div claas="card-body">
      <h3 class ="card-title">Formulario</h3>
        <form class="" action="index.php" method="post">
            <p>
              <label >Apellido</label> <br>
              <input type="text" name="apellido" class="form-control" value="" placeholder="Apellido">
            </p>
            <p>
              <label>Nombre</label><br>
              <input type="text" name="nombre" class="form-control" value="" placeholder="Nombre">
            </p>
            <p>
              <label>Fecha de nacimiento</label><br>
              <input type="date" name="fenac" class="form-control" value="" placeholder="Fecha de Nac.">
            </p>
            <button type="submit" name="button" class="btn btn-primary">Enviar</button>
            <a href="cerrar.php"><input type="button" value="Cerrar Cecion" class="btn btn-primary"></a>
        </form>
    </div>
  </div>
  <br>
  <table class="table"><!--Se le da un borde a la tabla-->
  <thead class="thead-dark">
    <tr>
    <th>Apellido</th>
    <th>Nombre</th>
    <th>Fecha</th>
  </tr>
  </thead>
  <tbody class="table-striped">
  <?php 
    $datos=$_SESSION['persona']; //la variable datos toma todo el contenido del array Datos de la session

      foreach ($datos as $value) {
        echo '<tr><td>'.$value['apellido'].'</td><td>'.$value['nombre'].'</td><td>'.$value['fenac'].'</td></tr>';
      }
    ?>
  </tbody>
</table>
</div>
</body>
</html>
