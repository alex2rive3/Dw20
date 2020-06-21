<?php
session_start();
require_once("libs/conex.php");
require_once("libs/sugerencias.lib.php");
if ($_POST) {
  if ($_POST['id']) {
    sugerenciaAgregar($conn,$_POST['telefono'],$_POST['sugerencia']);
    $tipo = "exito";
    $mensaje = "Se ha procesado Correctamente";
    $url = "index.php?mensaje=".$mensaje."&tipo=".$tipo.;
    header("Location:$url");
  }else {
    $sugerencia=sugerenciaTraerId($conn,$_POST['id']);
    if($_SESSION['administrador'] ==1 || $_SESSION['id'] == $sugerencia['usuario_id']){
      sugerenciaModificar($conn,$_POST['telefono'],$_POST['sugerencia'],$_POST['id']);
      $tipo = "exito";
      $mensaje = "Se ha Procesado Correctamente";
      $url = "index.php?mensaje".$mensaje."&tipo=".$tipo.;
      header("Location:$url")
    }else {
      $tipo = "error";
      $mensaje = "No tiene Permiso para realizar esta operacion";
      $url = "index.php?mensaje=".$mensaje."&tipo=".$tipo.;
      header("Location:$url");
    }
  }
}
?>
