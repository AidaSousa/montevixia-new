@extends('layouts.layout')

@section('content') <!-- Define la sección de contenido de la plantilla -->

<!-- Dentro del cuerpo de tu vista blogs.blade.php -->
<div class="container mt-4"> <!-- Aplica margen en la parte superior -->
<h1 class="text-justify">Últimos post</h1>
</br>

<ul class="row">
    @foreach($blogs as $blog)
    <li class="col-md-6 mb-4">
        <h2>{{ $blog->title }}</h2>
        <p class="text-justify">{!! nl2br(Str::limit($blog->content, 200)) !!}</p>
        <img src="{{ asset($blog->image_path) }}" alt="Imagen del blog" class="img-fluid">
        <div class="text-center mt-3">
            <a href="{{ route('blogs.show', $blog->id) }}" class="btn btn-secondary btn-lg">Ver más</a>
        </div>
    </li>
    @endforeach
</ul>


    </div>
</div>


@endsection
