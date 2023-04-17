@extends('dashboard')

@section('title', 'Index')

@section('content')


      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-users"></i> Actividades</h1>
          <a href="{{ route('event.create') }}" type="button" class="btn btn-primary ml-3" data-toggle="modal" data-target="#ModalCreate" type="button"><i class="fa fa-plus"></i>Nuevo</a>
        </div>
      </div>
      
        <div class="row">
            <div class="col-md-12">
              <div class="tile">
                <div class="tile-body">
                  <div class="table-responsive">
                    <table class="table table-hover table-bordered" id="tableUsuarios">
                      <thead>
                        <tr>
                          <th>ID</th>
                          <th>Nombre del padre/madre</th>
                          <th>DNI</th>
                          <th>Teléfono</th>
                          <th>Dirección</th>
                          <th>Email de contacto</th>
                          <th>Beca de comedor</th>
                          <th>Colaboración con AMPA</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                    </table>
                    </div>
                </div>
              </div>
            </div>
        </div>
@include('events.create')
@endsection