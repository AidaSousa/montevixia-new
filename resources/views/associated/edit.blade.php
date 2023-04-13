@extends('dashboard')

@section('title', 'Editar Asociado')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Editar Asociado</div>
                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('associated.update', ['id' => $associated->id]) }}">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}

                        <div class="form-group{{ $errors->has('situacion') ? ' has-error' : '' }}">
                            <label for="situacion" class="col-md-4 control-label">Situación</label>

                            <div class="col-md-6">
                                <select id="situacion" name="situacion" class="form-control" required autofocus>
                                    <option value="">Seleccione</option>
                                    <option value="Alta-nueva" {{ $associated->situacion == 'Alta-nueva' ? 'selected' : '' }}>Alta nueva</option>
                                    <option value="Renovacion" {{ $associated->situacion == 'Renovacion' ? 'selected' : '' }}>Renovación</option>
                                    <option value="Modificacion-datos" {{ $associated->situacion == 'Modificacion-datos' ? 'selected' : '' }}>Modificación datos</option>
                                </select>

                                @if ($errors->has('situacion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('situacion') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email_comunicacion_directa') ? ' has-error' : '' }}">
                            <label for="email_comunicacion_directa" class="col-md-4 control-label">Email de comunicación directa</label>

                            <div class="col-md-6">
                                <input id="email_comunicacion_directa" type="email" class="form-control" name="email_comunicacion_directa" value="{{ $associated->email_comunicacion_directa }}" required>

                                @if ($errors->has('email_comunicacion_directa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email_comunicacion_directa') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('beca_comedor') ? ' has-error' : '' }}">
                            <label for="beca_comedor" class="col-md-4 control-label">Beca comedor</label>

                            <div class="form-group{{ $errors->has('beca_comedor') ? ' has-error' : '' }}">
                                <label for="beca_comedor" class="col-md-4 control-label">Beca comedor</label>

                                <div class="col-md-6">
                                    <select id="beca_comedor" name="beca_comedor" class="form-control" required>
                                        <option value="">Seleccione</option>
                                        <option value="si">Sí</option>
                                        <option value="no">No</option>
                                    </select>

                                    @if ($errors->has('beca_comedor'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('beca_comedor') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('name_padre_madre') ? ' has-error' : '' }}">
                                <label for="name_padre_madre" class="col-md-4 control-label">Nombre del padre/madre</label>

                                <div class="col-md-6">
                                    <input id="name_padre_madre" type="text" class="form-control" name="name_padre_madre" value="{{ old('name_padre_madre') }}" required>
                                    @if ($errors->has('name_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('surname_padre_madre') ? ' has-error' : '' }}">
                                <label for="surname_padre_madre" class="col-md-4 control-label">Apellido del padre/madre</label>

                                <div class="col-md-6">
                                    <input id="surname_padre_madre" type="text" class="form-control" name="surname_padre_madre" value="{{ old('surname_padre_madre') }}" required>
                                    @if ($errors->has('surname_padre_madre'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('surname_padre_madre') }}</strong>
                                    </span>
                                    @endif
                                </div>
                                <div class="form-group{{ $errors->has('dni') ? ' has-error' : '' }}">
                                <label for="dni" class="col-md-4 control-label">DNI</label>

                                <div class="col-md-6">
                                    <input id="dni" type="text" class="form-control" name="dni" value="{{ old('dni') }}" required>
                                    @if ($errors->has('dni'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dni') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('telefono') ? ' has-error' : '' }}">
                                <label for="telefono" class="col-md-4 control-label">Teléfono</label>

                                <div class="col-md-6">
                                    <input id="telefono" type="text" class="form-control" name="telefono" value="{{ old('telefono') }}" required>
                                    @if ($errors->has('telefono'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('telefono') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('direccion') ? ' has-error' : '' }}">
                                <label for="direccion" class="col-md-4 control-label">Dirección</label>

                                <div class="col-md-6">
                                    <input id="direccion" type="text" class="form-control" name="direccion" value="{{ old('direccion') }}" required>
                                    @if ($errors->has('direccion'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('direccion') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group{{ $errors->has('colaboracion_ampa') ? ' has-error' : '' }}">
                                <label for="colaboracion_ampa" class="col-md-4 control-label">Colaboracion ampa</label>

                                <div class="col-md-6">
                                    <input id="colaboracion_ampa" type="text" class="form-control" name="colaboracion_ampa" value="{{ old('colaboracion_ampa') }}" required>
                                    @if ($errors->has('colaboracion_ampa'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('colaboracion_ampa') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Editar asociado
                                        </button>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection