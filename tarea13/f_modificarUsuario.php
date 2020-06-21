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
      <div class="card">
        <div class="col-9">
          <h3>Cambiar Datos del Usuario</h3>
          <div class="card-body">
            <form class="form" action="modificarUsuario.php" method="post">
              <div class="form-group">
                <input value="" type="text" name="correo" placeholder="Ingrese su nombre nuevo" class="form-contrl form-contrl.sm" required="">
              </div>
              <div class="form-group">
                <input value="" type="email" name="correo" placeholder="Ingrese su Correo Nuevo" class="form-contrl form-contrl.sm" required="">
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary">Cambiar</button>
              </div>
              </div>
            </form>
          </div>
        </div>
      </div>
  </body>
</html>
