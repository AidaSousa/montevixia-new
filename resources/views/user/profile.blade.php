@extends('layouts.layout')

@section('title', 'Mi Perfil')

@section('content')

<div class="container">
		<div class="main-body">
			<div class="row">
				<div class="col-lg-4">
					<div class="card">
						<div class="card-body">
							<div class="d-flex flex-column align-items-center text-center">
								<img src="/img/user.png" alt="Admin" class="rounded-circle p-1 bg-transparent" width="75">
								<div class="mt-3">
									<h4>{{ auth()->user()->name }}</h4>
									<p class="text-secondary mb-1">{{auth()->user()->surname }}</p>
									<a class="btn btn-primary text-white">Hacerme socio</a>
								</div>
							</div>
							<hr class="my-4">
							<h3>Agregar hijo</h3>
                            @include('children.create')
						</div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="card">
						<div class="card-body">
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Nombre</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="name" id="name">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Apellidos</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="surname" id="surname">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Email</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="email" class="form-control" name="email" id="email">
								</div>
							</div>
							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Password</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="password" class="form-control" name="password" id="password">
								</div>
							</div>
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
                                    <button type="submit" class="btn btn-primary px-4">Guardar cambios</button>
								</div>
							</div>
						</div>
					</div>
                    <br/>
                    <br/>
					<div class="row">
                        @include('children.index')
					
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection