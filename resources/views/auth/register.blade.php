
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#009688">
    <link rel="stylesheet" type="text/css" href="/css/main.temp.css">

    
    <title>Registro</title>
  </head>

  <body>
    <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      <div class="logo">
        <h1>Montevixia</h1>
      </div>
      <div class="login-box">
        <div id="divLoading" >
          <div>
            <!-- <img src="/img/loading.svg" alt="Loading"> -->
          </div>
        </div>
        

    <form method="POST" action="/register" class="form-horizontal ">
  @csrf
  <div class="form-group">
    <label for="name" class="col-md-4 mt-3 control-label">Nombre</label>
    <div class="col-md-8">
      <input type="text" name="name" class="form-control" required>
    </div>
  </div>

  <div class="form-group">
    <label for="surname" class="col-md-4 control-label">Apellido</label>
    <div class="col-md-8">
      <input type="text" name="surname" class="form-control">
    </div>
  </div>

  <div class="form-group">
    <label for="email" class="col-md-4 control-label">Email</label>
    <div class="col-md-8">
      <input type="email" name="email" class="form-control" required>
    </div>
  </div>

  <div class="form-group">
    <label for="password" class="col-md-4 control-label">Contraseña</label>
    <div class="col-md-8">
      <input type="password" name="password" class="form-control" required>
    </div>
  </div>

  <div class="form-group">
    <label for="password_confirmation" class="col-md-4 control-label">Confirmar contraseña</label>
    <div class="col-md-8">
      <input type="password" name="password_confirmation" class="form-control" required>
    </div>
  </div>

  <div class="form-group">
    <div class="col-md-8 col-md-offset-4">
      <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
  </div>
</form>

      </div>
    </section>
    <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/fontawesome.js"></script>
    <script src="/js/main.temp.js"></script>
    <script src="js/pace.min.js"></script>
    <script type="text/javascript" src="/js/sweetalert.min.js"></script>
  </body>
</html>