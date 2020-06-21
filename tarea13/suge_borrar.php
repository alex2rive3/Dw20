<?php
session_start();
require_once("libs/conex.php");
require_once("libs/sugerencias.lib.php");
if ($_GET["id"]) {
  $item = sugerenciaTraerId($conn,$_GET["id"]);
  if ($_SESSION['administrador'] ==1 || $item['usuario_id'] == $_SESSION['id']) {
    sugerenciaBorrar($conn,$_GET["id"]);
    $tipo = "exito";
    $mensaje = "Se ha Procesado Correctamente";
    $url = "index.php?mensaje=".$mensaje."&tipo=".$tipo.;
    header("Location:$url");
  }else {
    $tipo = "error";
    $mensaje = "No tiene permiso para realizar esta operacion";
    $url = "index.php?mensaje=".$mensaje."&tipo=".$tipo.;
    header("Location:$url");
  }
}
?>
