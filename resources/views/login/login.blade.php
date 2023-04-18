<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Arancha Fernandez">
    <meta name="theme-color" content="#009688">
    <link rel="stylesheet" type="text/css" href="/css/main.temp.css">

    
    <title>Login</title>
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
        <form method="POST" class="login-form" name="formLogin" id="formLogin" action="/login">
          @csrf
          <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>INICIAR SESIÓN</h3>
          <div class="form-group">
            <label class="control-label">USUARIO</label>
            <input id="email" name="email" class="form-control" type="email" placeholder="Email" autofocus>
          </div>
          <div class="form-group">
            <label class="control-label">CONTRASINAL</label>
            <input id="password" name="password" class="form-control" type="password" placeholder="Contraseña">
          </div>
          @error('message')
            <p class="text-danger">{{ $message }}</p>
          @enderror
          <div class="form-group">
            <div class="utility">
              <p class="semibold-text mb-2"><a href="#" data-toggle="flip">Esqueciches o teu contrasinal?</a></p>
            </div>
          </div>
          <div id="alertLogin" class="text-center"></div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-sign-in-alt"></i> INICIAR SESIÓN</button>
          </div>
        </form>
        <form id="formRecetPass" name="formRecetPass" class="forget-form" action="">
          <h5 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Esqueciches o teu contrasinal?</h5>
          <div class="form-group">
            <label class="control-label">EMAIL</label>
            <input id="txtEmailReset" name="txtEmailReset" class="form-control" type="email" placeholder="Email">
          </div>
          <div class="form-group btn-container">
            <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>REINICIAR</button>
          </div>
          <div class="form-group mt-3">
            <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Iniciar sesión</a></p>
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