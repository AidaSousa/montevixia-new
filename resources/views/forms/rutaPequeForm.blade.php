@extends('layouts.layout')

@section('title', 'Formulario Peque Ruta')

@section('content')

<div class="row">
    <div class="col-md-6 col-xl-4 p-b-30 m-lr-auto">
        <div class="block1 wrap-pic-w">
            <img src="img/img-5.png" alt="Peque ruta">
            <h1>INSCRICIÓN PEQUERUTA DO SANJURJO. RÍO DOS DOUS NOMES. COIRÓS  1/6/2023</h1>
            <p>Saída a natureza para facer a ruta do Río dos dous nomes co obxectivo de pasar un día ao aire libre, compartir este espazo co resto das familias e aprender da natureza.

            Condicións:
            - Actividade gratuíta para familias socias da ANPA e con custe de 8 euros para as no socias
            - Cada neno ou nena irá acompañado dun adulto responsable.
            - Está previsto o servizo de autobús e guías especializados/as
            - Máximo de persoas inscritas por unidade familiar: 5
            - Asignación de prazas: por orde de inscrición.</p>
            <img src="img/img-6.png" alt="Peque ruta">
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="tile">
                    <h3 class="tile-title text-center">FORMULARIO PEQUE-RUTA</h3>
                    <div class="tile-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="">Número total de personas en el grupo</label>
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
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <h3 class="control-label" for="">Datos del adulto responsable</h3>
                                <label class="control-label" for="">Nombre y apellidos</label>
                                <input class="form-control" type="text">
                                <div class="form-group">
                                    <label class="control-label" for="">Fecha de nacimiento</label>
                                    <input class="form-control" type="date">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">DNI</label>
                                    <input class="form-control" type="text" required>
                                </div>
                                <div class="form-group">
                                    <label class="control-label" for="">Teléfono de contacto</label>
                                    <input class="form-control" type="tel">
                                </div>
                                <div class="form-group">
                                    <div class="form-check">
                                        <label class="form-check-label">
                                            <input class="form-check-input" type="checkbox">Acepto los términos y condiciones
                                        </label>
                                    </div>
                                </div>
                                <h3 class="tile-title text-center">DATOS DE LA PERSONA ADICIONAL</h3>
                                <div class="form-group">
                                    <label class="control-label">Nombre y apellidos</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Fecha de nacimiento</label>
                                    <input class="form-control" type="date">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">DNI</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Teléfono de contacto</label>
                                    <input class="form-control" type="tel">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary" type="submit" onclick="agregarFormulario()">AGREGAR PARTICIPANTE</button>
                                </div>
                                <div class="form-group" id="formularios-container">
                                    <!-- Este div se usará para contener los formularios agregados -->
                                </div>
                            </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function agregarFormulario() {
        var formulario = `
        <div class="formulario">
            <div class="form-group">
            <label class="control-label">Nombre y apellidos</label>
            <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label class="control-label">Fecha de nacimiento</label>
                <input class="form-control" type="date">
            </div>
            <div class="form-group">
                <label class="control-label">DNI</label>
                <input class="form-control" type="text">
            </div>
            <div class="form-group">
                <label class="control-label">Teléfono de contacto</label>
                <input class="form-control" type="tel">
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