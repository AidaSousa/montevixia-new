@extends('layouts.layout')

@section('content') <!-- Define la sección de contenido de la plantilla -->

<h1>Lista de Blogs</h1>

<ul>
    @foreach($blogs as $blog) <!-- Recorre los blogs recibidos desde el controlador -->
    <li>
        <h2>{{ $blog->title }}</h2> <!-- Muestra el título del blog -->
        <p>{{ $blog->content }}</p> <!-- Muestra el contenido del blog -->
        <img src="{{ asset($blog->image_path) }}" alt="Imagen del blog"> <!-- Muestra la imagen del blog -->
        <a href="{{ route('blogs.show', $blog->id) }}">Ver más</a> <!-- Genera un enlace para ver el blog completo -->
    </li>
    @endforeach
</ul>

@endsection
