@extends('dashboard')

@section('title', 'Index')

@section('content')


      <div class="app-title">
        <div class="d-flex">
          <h1><i class="fa fa-archive"></i> Categorias</h1>
          <a href="{{ route('associated.create') }}" class="btn btn-primary ml-3" type="button" onclick="openModal();"><i class="fa fa-plus"></i>Nuevo</a>
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
                          <th>Acciones</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>1</td>
                          <td>Excursiones</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>2</td>
                          <td>Comedor</td>
                          <td></td>
                        </tr>
                        <tr>
                          <td>3</td>
                          <td>Talleres</td>
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