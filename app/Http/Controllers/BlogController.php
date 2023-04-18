<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;


class BlogController extends Controller
{
    public function index()
    {
        // Obtén todos los blogs desde la base de datos
        $blogs = Blog::all();
        
        // Retorna la vista 'blogs.blade.php' y pasa los blogs como datos
        return view('blog.blogs', compact('blogs'));
    }
    
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
{
    // Validar los datos del formulario
    $request->validate([
        'title' => 'required',
        'content' => 'required',
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Validación para la imagen
    ]);

    // Obtener el nombre original del archivo
    $imageName = $request->file('image')->getClientOriginalName();

    // Mover la imagen a la carpeta de imágenes en public
    $request->file('image')->move(public_path('img'), $imageName);

    // Obtener la ruta relativa de la imagen
    $imagePath = 'img/' . $imageName;

    // Crear un nuevo objeto Blog con los datos del formulario
    $blog = new Blog([
        'title' => $request->get('title'),
        'content' => $request->get('content'),
        'image_path' => $imagePath,
    ]);

    // Guardar el objeto Blog en la base de datos
    $blog->save();

    // Redirigir a la página de inicio o a la página de detalle del blog creado
    return redirect()->route('blogs.index')->with('success', 'Blog creado exitosamente');
}

    public function show($id)
    {
        $post = Blog::find($id); // Cambia la variable $blog a $post
    
        return view('blog.post', compact('post')); // Utiliza la variable $post en la función compact()
    }
    
}