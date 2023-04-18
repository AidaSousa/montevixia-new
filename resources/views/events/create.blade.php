<form class="form-horizontal" method="POST" enctype="multipart/form-data" action="{{ route('associated.store') }}">
  <div class="modal fade text-left" id="ModalCreate" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Crear nueva actividad</h4>
        </div>
        <div class="modal-body">
        <div class="container">
        <div class="row">
            <div class="col-md-12 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" class="col-md-4 control-label">Nombre del padre/madre</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" class="col-md-4 control-label">Descripción</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" type="date" class="col-md-4 control-label">Fecha de inicio de actividad</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" class="col-md-4 control-label">Precio de no asociado</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" class="col-md-4 control-label">Precio de asociado</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" type="date" class="col-md-4 control-label">Fecha de finalización de actividad</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="name_padre_madre" class="col-md-4 control-label">Categoria</label>
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Registrar actividad
                                        </button>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
        </div>
      </div>
    </div>
  </div>
</form>