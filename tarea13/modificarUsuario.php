<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
if ($_POST) {
  //modificarContraseña($conn,$_SESSION['id'],mb5($_POST['contrasena']),mb5($_POST['passnew']),mb5($_POST['confPassNew']));
  actualizarUsuario($conn,$_SESSION['id'], $_POST['nombre'], $_POST['correo']);
}
header("Location:index.php");
?>
