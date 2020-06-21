<?php
require_once("libs/conex.php");
function usuariovalidar($usuario, $contrasena, $conn){
  $usuario=filter_var($usuario,FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);
  $contrasena= filter_var(FILTER_SANITIZE_STRING, FILTER_FLAG_NO_ENCODE_QUOTES);

      $sql='SELECT * FROM usuarios where usuario="'.$usuario.'" and contrasena= "'.$contrasena.'" ';
      $filas=$conn->query($sql);
      if ($filas->num_rows==1){
        $d=$filas->fetch_assoc();
        $_SESSION['id']=$d['id'];
        $_SESSION['usuario']=$d['usuario'];
        $_SESSION['correo']=$d['correo'];
        $_SESSION['nombre']=$d['nombre'];
        $_SESSION['administrador']=$d['administrador'];
        echo "Acceso Correcto";
        }
        else {
        echo "Acceso Denegado";
        }
  }
  function usuariosalir(){
  session_destroy();
  }
 ?>
