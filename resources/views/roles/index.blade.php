@extends('dashboard')

@section('title', 'Index')

@section('content')

<div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-users"></i> Roles</h1>
          <a href="{{ route('associated.create') }}"  data-toggle="modal" data-target="#ModalCreate"class="btn btn-primary ml-3" type="button" onclick="openModal();"><i class="fa fa-plus"></i>Nuevo</a>
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
                          <th>Nombre</th>
                          <th>Apellidos</th>
                          <th>Rol</th>
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Aida</td>
                          <td>Sousa Lozano</td>
                          <td>Administrador</td>
                          <td><div class="d-flex">
                          <a href="{{ route('associated.create') }}" data-toggle="modal" data-target="#ModalCreate" class="btn btn-info ml-3" type="button" onclick="openModal();">Editar</a>
                        </div>
                        <div class="d-flex">
                          <a href="{{ route('associated.create') }}" data-toggle="modal" data-target="#ModalCreate" class="btn btn-danger ml-3" type="button" onclick="openModal();">Eliminar</a>
                        </div></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Noelia</td>
                          <td>Rilova Ayuso</td>
                          <td>Administrador</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Arancha</td>
                          <td>Fernandez Fernandez</td>
                          <td>Abonado</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>4</td>
                          <td>Georgette</td>
                          <td>Velasco Aliss</td>
                          <td>Abonado</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>5</td>
                          <td>Ana</td>
                          <td>De la Vega</td>
                          <td>No Abonado</td>
                          <td></td>
                        </tr>
                      </tbody>
                    </table>
                    </div>
                </div>
              </div>
            </div>
        </div>


@endsection