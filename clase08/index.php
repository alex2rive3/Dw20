<?php
//Todos los datos ejecuados despues de esta linea se garda en el SESSION
session_start(); //Genera un ID
//echo $_COOKIE['PHPSESSID'];

//Pregunta si es que no existe una sesion
if (!$_SESSION['datos']){
  $_SESSION['datos']=[]; //se genera un array datos con un array vacio
  setcookie("saludo","tu session a iniciado"); //se manda un valor a la cookies para que tenga algo cargado al iniciar
}
$nombre="";
$apellido="";
//El metodo Get parace los datos enviados en le link y solo debe ser usada para pedir datos al servidor

// if ($_GET)
// {
//   print_r($_GET);
//   $nombre=$_GET['nombre'];
//   $apellido=$_GET['apellido'];
//  $lista=[1,2,3,4];
// }

//El metodo post esconde las informaciones mandadas al servidor
//Post se usa cuando se tiene que guaradar y modificar los datos y es enviado de forma segura en algunos casos depende del proceso http va encriptado

// if ($_POST)
//{
   //ARRAY PUSH es utilizado para cargar el array con los datos de la secion en la variable SESSION
   array_push($_SESSION['datos'],
   [
     // la => indica en en donde se debe guardar un valor
     "nombre"=> $_POST['nombre'], //se captura el valor de nombre en la clave "nombre del array"
     "apellido"=> $_POST['apellido']
    ]);

   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
//}


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 08</title>
  </head>
  <body>
    <h1>Formularios con PHP</h1>
    <div id="formulario">
<!--<form class="" action="index.php" method="get">-->
      <form class="" action="index.php" method="post">
        <input type="text" name="nombre" value="" placeholder="Nombre">
        <input type="text" name="apellido" value="" placeholder="Apellido">
       <button type="submit" name="button">Enviar</button>
      </form>
  <ol>
      <?php 
      //print_r($_SESSION);
      $datos=$_SESSION['datos']; //la variable datos toma todo el contenido del array Datos de la session

      foreach ($datos as $key => $value) {
        echo "<li>".$value['apellido'].", ".$value['nombre']."</li>";
      }
      ?>
  </ol>
  <a href="php/cerrar.php">Cerrar Session</a>
    </div>
  </body>
</html>
