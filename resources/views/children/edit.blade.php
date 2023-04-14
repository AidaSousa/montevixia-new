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
  
  <section class="material-half-bg">
      <div class="cover"></div>
    </section>
    <section class="login-content">
      
      <div class="login-box p-3 rounded-50">
        <div id="divLoading" >
          <div>
            <!-- <img src="/img/loading.svg" alt="Loading"> -->
          </div>
        </div>


<form method="POST" action="{{ route('children.update', ['id' => $children->id]) }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div>
        <h6 class="mb-0 mt-3">Nombre:</h6>
        <input class="form-control" type="text" name="name" id="name" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Apellido:</h6>
        <input class="form-control" type="text" name="surname" id="surname" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Fecha de nacimiento:</h6>
        <input class="form-control" type="date" name="birth_date" id="birth_date" required>
    </div>
    <div>
        <h6 class="mb-0 mt-3">Año escolar:</h6>
        <select class="form-control" name="school_year" id="school_year" required>
            <option class="form-control" value="4_EI">4º Educación Infantil</option>
            <option class="form-control" value="5_EI">5º Educación Infantil</option>
            <option class="form-control" value="6_EI">6º Educación Infantil</option>
            <option class="form-control" value="1_EP">1º de Educación Primaria</option>
            <option class="form-control" value="2_EP">2º de Educación Primaria</option>
            <option class="form-control" value="3_EP">3º de Educación Primaria</option>
            <option class="form-control" value="4_EP">4º de Educación Primaria</option>
            <option class="form-control" value="5_EP">5º de Educación Primaria</option>
            <option class="form-control" value="6_EP">6º de Educación Primaria</option>
        </select>
    </div>
    <div>
        <button class="btn btn-success btn-custom px-4 mt-3" type="submit">Editar</button>
    </div>
</form>

</div>
    </section>
  
  </body>
</html>
