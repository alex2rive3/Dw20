<?php
session_start();
require_once("libs/conex.php");
require_once("libs/setup.lib.php");
require_once("libs/sugerencias.lib.php");
$datos = sugerenciaTodo($conn);
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

    <div class="alert  <?php if ($_GET['tipo'] == "error") {
        echo "alert-danger";
      }elseif ($_GET['tipo'] == "exito") {
        echo "alert-success";
      }else {
        echo "alert-warning";
      }?>" role="alert">
      <?php if ($_GET['mensaje']) { ?>
        <ul>
          <li><?php echo $_GET['mensaje']  ?></li>
        </ul>
    </div>
  <?php } ?>
  <div class="row">

    <aside class=" col-3">
      <?php
      if (isset($_SESSION['correo'])) {
        include('v_perfil.php');
      } else {
        include('f_login.php');
      }

      ?>
    </aside>

    <div class="  col-9">
      <?php foreach ($datos as $dato) { ?>
        <div class="card">
          <div class="card-header">
            <?php
            if ($_SESSION) {
              if ($_SESSION['administrador'] == 1 || $_SESSION['id'] == $dato['usuario_id']) { ?>
                <!--BOTONES PARA BORRAR Y EDITAR VISIBLES SOLO PARA LOS LOGUEADOS -->
                <a href="suge_borrar.php?id=<?php echo $dato['id']; ?>" class="btn btn-danger">Borrar</a>
                <a href="f_sugerencias.php?id=<?php echo $dato['id']; ?>" class="btn btn-warning">Editar</a>
            <?php }
            } ?>
            <?php echo $dato['nombre']; ?> dice:
          </div>
          <div class="card-body">
            <?php echo $dato['sugerencias']; ?>
          </div>
        </div>

      <?php }  ?>
    </div>

  </div>

  </div>
  <div class="container">
    <?php
    if (isset($_SESSION['correo'])) {
      include('f_sugerencias.php');
    } else { ?>
      <p class="alert alert-warning" role="alert">debe <a href="#f_login">ingresar</a> o <a href="f_registro.php">registrarse</a> para escribir una sugerencia</p>
    <?php
    }
    ?>
    <p calss= "alert alert-warning"><a href="modificarContraseña.php">¿Ha olvidado su contraseña?</a></p>
  </div>
</body>
</html>
