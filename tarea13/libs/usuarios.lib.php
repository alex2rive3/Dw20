<?php

// crear
function crear_usuario($conn, $nombre, $usuario,$contrasena,$correo )
{
  $sql="INSERT INTO usuarios (id, nombre, usuario, contrasena, correo, administrador)
  VALUES (NULL, '".$nombre."', '".$usuario."', '".$contrasena."', '".$correo."',0)";
  //echo $sql;
  $filas=$conn->query($sql);
}
// modificar
function actualizarUsuario($conn,$id, $nombre, $correo){
  $filas = $actualizar->fetch_assoc();
  $actualizar = $sql->query("SELECT * FROM usuarios");
  if (empty($nombre) && empty($correo)) {
    $actualizado = $sql->query("UPDATE usuarios SET nombre = '$nombre' , correo  = '$correo'  WHERE id='$id'");
    if($actualizado){
      echo "Ambos datos fueron Cambiados Correctamente";
    }else{
      echo "Se ha producido un error al acatualizar los Datos ";
    }
  }else {
  echo "Los campos no pueden estar vacios";
  }
}
// cambiar password
function modificarContraseña($conn,$id,$contrasena,$passnew,$confPassNew){
  $contraseñaNueva=$passnew;
  $confContraseñaNueva=$confPassNew;
  $actualizar = $sql->query("SELECT * FROM usuarios");
  $filas=$actualizar->fetch_assoc();
  if($filas['contrasena'] == $contrasena){
    if ($contraseñaNueva==$confContraseñaNueva) {
      $actualizado = $sql->query("UPDATE usuarios SET contrasena='$contrasena' WHERE id='$id'");
      if($actualizado){
        echo "La contrseña fue cambiado correctamente";
      }else{
        echo "Se ha producido un error al acatualizar la contraseña";
      }
    }else {
    echo "Ambas contrseñas deben coincidir para realizar el cambio";
    }
  }else{
    echo "La contraseña que acaba de ingresar no existe";
  }
}
 ?>
