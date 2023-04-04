


    @extends('layouts.layout')

    @section('content')


    <br />
		<br />
		<div class="row">
					<div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
						<!-- Block1 -->
						<div class="block1 wrap-pic-w">
							<img src="img/img-5.jpg" alt="IMG-BANNER">
      <h1>INSCRICIÓN PEQUERUTA DO SANJURJO. RÍO DOS DOUS NOMES. COIRÓS  1/6/2023</h1>                      
<p>Saída a natureza para facer a ruta do Río dos dous nomes co obxectivo de pasar un día ao aire libre, compartir este espazo co resto das familias e aprender da natureza.

Condicións:
- Actividade gratuíta para familias socias da ANPA e con custe de 8 euros para as no socias
- Cada neno ou nena irá acompañado dun adulto responsable.
- Está previsto o servizo de autobús e guías especializados/as
- Máximo de persoas inscritas por unidade familiar: 5
- Asignación de prazas: por orde de inscrición.</p>


							<img src="img/img-6.jpg" alt="IMG-BANNER">
    
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



					</div>
					<br />
					<br />
					<br />
					<h4  class="tile-title text-center">CONDICIONES DE PARTICIPACION</h4>
					<h5>Debes aceptar las condiciones de partocipacion para que la participacion sea válida </h5>
					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" required>Confirmo que al menos un niño menor de 12 años se agrega al grupo.
							</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" required>Confirmo que hay un adulto responsable del grupo en el grupo.
							</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" required>En todo momento las personas deben cumplir con las instrucciones de las personas que guían la ruta.
							</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" required>Confirmo que el grupo tiene las condiciones físicas y mentales adecuadas para realizar la actividad.
							</label>
						</div>
					</div>

					<div class="form-group">
						<div class="form-check">
							<label class="form-check-label">
								<input class="form-check-input" type="checkbox" required>Confirmo que acepto las condiciones de participación de la actividad.
							</label>
						</div>
					</div>
					<label>La unidad familiar es miembro de la AMPA</label><br>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="amap" id="amap_si" value="si" required><br />
						<label class="form-check-label" for="amap_si">SI</label>
					</div>
					<div class="form-check form-check-inline">
						<input class="form-check-input" type="radio" name="amap" id="amap_no" value="no" required>
						<label class="form-check-label" for="amap_no">NO</label>
					</div>

					<div class="form-group">
						<label>El grupo utilizará el servicio de autobús.</label><br>
						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="autobus" id="autobus_si" value="si" required>
							<label class="form-check-label" for="autobus_si">SI</label>
						</div>

						<div class="form-check form-check-inline">
							<input class="form-check-input" type="radio" name="autobus" id="autobus_no" value="no" required>
							<label class="form-check-label" for="autobus_no">NO</label>

						</div>

						<div class="form-group">
							<label>Autorizo la publicación de fotos en las que aparezcan personas del grupo en el blog de AMPA</label><br>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="fotos" id="fotos_si" value="si" required>
								<label class="form-check-label" for="fotos_si">SI</label>
							</div>
							<div class="form-check form-check-inline">
								<input class="form-check-input" type="radio" name="fotos" id="fotos_no" value="no" required>
								<label class="form-check-label" for="fotos_no">NO</label>
							</div>
							<br/>
							<br/>
							<div class="form-group">
							<button class="btn btn-primary" type="submit">ENVIAR</button>
</div>

						</div>


						</form>
					</div>
				</div>
			</div>
		</div>



@endsection