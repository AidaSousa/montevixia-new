@extends('layouts.layout')

@section('content') <!-- Define la sección de contenido de la plantilla -->

<!-- Dentro del cuerpo de tu vista blogs.blade.php -->
<div class="container mt-4"> <!-- Aplica margen en la parte superior -->
    <h1>Nuestro Blog</h1>
    <hr> <!-- Agrega una línea horizontal para separación -->
    <div class="row"> <!-- Crea una fila para organizar las columnas -->
        @foreach($blogs as $blog) <!-- Recorre los blogs recibidos desde el controlador -->
        <div class="col-md-6"> <!-- Crea una columna de tamaño medio para mostrar dos blogs por fila -->
            <div class="mb-4"> <!-- Agrega margen inferior para separación -->
                <h2>{{ $blog->title }}</h2>
                <p>{{ $blog->content }}</p>
                <img src="{{ asset($blog->image_path) }}" alt="Imagen del blog" class="img-fluid mb-3"> <!-- Agrega una clase de Bootstrap para hacer la imagen responsive y margen inferior -->
                <div class="text-center"> <!-- Agrega la clase text-right para alinear el botón "Ver más" al final del contenido -->
                <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-secondary rounded-pill btn-lg">Ver más</a> <!-- Agrega las clases de estilos de Bootstrap para botones y la clase rounded-pill para bordes redondeados -->
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>


@endsection
