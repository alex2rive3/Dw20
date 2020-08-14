<?php

function TodoProductos($conn)
{
  $sql="select * from stock";
  $filas=$conn->query($sql);
  //echo "<pre>";
  return $filas;
}
function guardarProducto($conn, $producto, $cantidad, $costo)
    {
      $sql="INSERT INTO stock (id, producto, cantidad, costo)
       VALUES (NULL, '".$producto."', '".$cantidad."', '".$costo."')";
      //echo $sql;
      $filas=$conn->query($sql);
    }
function BorrarProducto($conn, $id)
  {
    $sql="DELETE FROM stock WHERE id =".$id;
    $filas=$conn->query($sql);
    //print_r($filas);
  }
function idProductos($conn, $id)
  {
     $sql="select * FROM stock WHERE id =".$id;
    $filas=$conn->query($sql);
    return $filas->fetch_assoc();
  }

function buscar($conn, $buscar){
  $sql = "SELECT * FROM stock WHERE id LIKE '%".$buscar."%' OR 
    producto LIKE '%".$buscar."%' OR
    cantidad LIKE '%".$buscar."%' OR
    costo LIKE '%".$buscar."%'";
  $filas=$conn->query($sql);
  return $filas;
}


 ?>
