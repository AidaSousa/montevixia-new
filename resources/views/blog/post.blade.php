@extends('layouts.layout')

@section('content') <!-- Define la sección de contenido -->
<div class="container mt-4"> <!-- Contenedor principal con margen superior -->
    <div class="row"> <!-- Fila para el contenido -->
        <div class="col-md-8 offset-md-2"> <!-- Columna principal centrada -->
            <h1 class="mb-4 text-justify">{{ $post->title }}</h1> <!-- Título del post con margen inferior -->
            <p class="mb-4 text-justify">{{ $post->content }}</p> <!-- Contenido del post con margen inferior -->
            <img src="{{ asset($post->image_path) }}" alt="Imagen del post" class="img-fluid mb-4"> <!-- Imagen del post con margen inferior -->

            <!-- Botón de regreso -->
            <a href="{{ route('blogs.index') }}" class="btn btn-success btn-sm btn-block mb-4">Volver</a> <!-- Botón centrado, grande y de ancho completo con margen inferior -->
        </div>
    </div>
</div>
@endsection
