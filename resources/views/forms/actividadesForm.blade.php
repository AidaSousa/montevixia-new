@extends('layouts.layout')

@section('title', 'Banco Libros')

@section('content')

<div class="row justify-content-center" style= "margin-top: 80px;">
        <div class="col-md-6">
          <div class="tile">
            <h3 class="tile-title text-center" style="margin-bottom: 80px">FORMULARIO DE INSCRIPCION</h3>
            <div class="tile-body">
              <form>
                <div class="form-group">
                  <label class="control-label">Nombre</label>
                  <input class="form-control" type="text" placeholder="nombre completo ">
                </div>
                <div class="form-group">
                  <label class="control-label">Email</label>
                  <input class="form-control" type="email" placeholder="correo electronico">
                </div>
                <div class="form-group">
                  <label class="control-label">Curso</label>
                  <input class="form-control" type="text" placeholder="curso">
                </div>
            
                <div class="form-group">
                  <div class="form-check">
                    <label class="form-check-label">
                      <input class="form-check-input" style="margin-bottom: 40px" type="checkbox">I accept the terms and conditions
                    </label>
                    <div class="form-group" style="margin-bottom: 80px">
                                <button class="btn btn-custom " type="submit" style="background-color: #009688;
    color: white">ENVIAR</button>
                            </div>
                  </div>
                </div>
</div>
              </form>
</div>
</div>





@endsection