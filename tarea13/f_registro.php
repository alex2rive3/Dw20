<?php
session_start();
require_once("libs/conex.php");
require_once("libs/usuarios.lib.php");
require_once("libs/setup.lib.php");
if ($_POST) {
  crear_usuario($conn,$_POST['nombre'],$_POST['usuario'],$_POST['contrasena'],$_POST['correo']);
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/jquery/jquery.js" charset="utf-8"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
      <h3>Regitro de Usuario</h3>
      <form class="" action="f_registro.php" method="post">
        <input class="form-control"type="text" name="nombre" value="" placeholder="Ingrese su nombre"><br>
        <input class="form-control"type="text" name="usuario" value="" placeholder="Ingrese un usuario"><br>
        <input class="form-control"type="password" name="contrasena" value="" placeholder="Ingrese una contraseña"><br>
        <input class="form-control"type="email" name="correo" value="" placeholder="Ingrese un correo"><br>
        <button class="btn btn-primary" type="submit" name="button">Enviar</button>
      </form>
      <div>
        <a href="index.php"class="btn">Volver al inicio</a>
      </div>
    </div>
  </body>
</html>
