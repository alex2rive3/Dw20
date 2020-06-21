<?php
session_start();
require_once("libs/conex.php");
require_once("libs/acceso.lib.php");
if ($_POST) {
  usuariovalidar($_POST['usuario'],md5($_POST['contrasena']),$conn);
}
header("Location:index.php");
?>
