<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title> -->

    <!-- Importación de Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->

    <!-- Importación de Bootstrap JS y sus dependencias (jQuery y Popper.js) -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>

<body> -->



    @extends('layouts.layout')

    @section('content')


    <br />
		<br />
		<div class="row">
					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="img/img-5.png" alt="IMG-BANNER">
      <h1>INSCRICIÓN PEQUERUTA DO SANJURJO. RÍO DOS DOUS NOMES. COIRÓS  1/6/2023</h1>                      
<p>Saída a natureza para facer a ruta do Río dos dous nomes co obxectivo de pasar un día ao aire libre, compartir este espazo co resto das familias e aprender da natureza.

Condicións:
- Actividade gratuíta para familias socias da ANPA e con custe de 8 euros para as no socias
- Cada neno ou nena irá acompañado dun adulto responsable.
- Está previsto o servizo de autobús e guías especializados/as
- Máximo de persoas inscritas por unidade familiar: 5
- Asignación de prazas: por orde de inscrición.</p>


							<img src="img/img-6.png" alt="IMG-BANNER">
    
					</div>


		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="tile">
					<h3 class="tile-title text-center">FORMULARIO PEQUE-RUTA</h3>
					<div class="tile-body">
						<form>
							<div class="form-group">
								<label class="control-label">Número total de personas en el grupo</label>
								<select class="form-control">
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label">Número total de menores de 12 años en el grupo</label>
								<select class="form-control">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
								</select>
							</div>
							<div class="form-group">
								<label class="control-label">Datos del adulto responsable</label>
								<input class="form-control" type="text" placeholder="nombres y apellido">
							</div>
							<div class="form-group">
								<label class="control-label">Fecha de nacimiento del adulto responsable</label>
								<input class="form-control" type="date">
							</div>
							<div class="form-group">
								<label class="control-label">DNI del adulto responsable</label>
								<input class="form-control" type="text" placeholder="DNI obligatorio para personas adultas">
							</div>
							<div class="form-group">
								<label class="control-label">Teléfono de contacto</label>
								<input class="form-control" type="tel" placeholder="teléfono de contacto">
							</div>
							
							<div class="form-group">
								<div class="form-check">
									<label class="form-check-label">
										<input class="form-check-input" type="checkbox">Acepto los términos y condiciones
									</label>
								</div>
							</div>
							<br/>
							<br/>

							<h3 class="tile-title text-center">DATOS DE LA PERSONA ADICIONAL</h3>
							
							<div class="form-group">
								<label class="control-label">Nombre completo</label>
								<input class="form-control" type="text" placeholder="nombre completo">
							</div>
							<div class="form-group">
								<label class="control-label">Fecha de nacimiento </label>
								<input class="form-control" type="date">
							</div>
							<div class="form-group">
								<label class="control-label">DNI del adulto responsable</label>
								<input class="form-control" type="text" placeholder="DNI obligatorio para personas adultas">
							</div>
							<div class="form-group">
								<label class="control-label">Teléfono de contacto</label>
								<input class="form-control" type="tel" placeholder="teléfono de contacto">
							</div>
							<div class="form-group">
							<button class="btn btn-primary" type="submit" onclick="agregarFormulario()">AGREGAR PARTICIPANTE</button>
</div>

<div id="formularios-container">
  <!-- Este div se usará para contener los formularios agregados -->
</div>

<script>
function agregarFormulario() {
  var formulario = `
    <div class="formulario">
      <div class="form-group">
        <label class="control-label">Nombre completo</label>
        <input class="form-control" type="text" placeholder="nombre completo">
      </div>
      <div class="form-group">
        <label class="control-label">Fecha de nacimiento </label>
        <input class="form-control" type="date">
      </div>
      <div class="form-group">
        <label class="control-label">DNI del adulto responsable</label>
        <input class="form-control" type="text" placeholder="DNI obligatorio para personas adultas">
      </div>
      <div class="form-group">
        <label class="control-label">Teléfono de contacto</label>
        <input class="form-control" type="tel" placeholder="teléfono de contacto">
      </div>
    </div>
  `;
  // Crea un nuevo elemento div y agrega el formulario como HTML
  var nuevoFormulario = document.createElement("div");
  nuevoFormulario.innerHTML = formulario.trim();
  // Agrega el nuevo formulario al contenedor
  var contenedorFormularios = document.getElementById("formularios-container");
  contenedorFormularios.appendChild(nuevoFormulario.firstChild);
}
</script>



					


@endsection