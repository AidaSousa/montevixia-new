<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
{
    // Obtiene el usuario actual
    $user = Auth::user();

    // Obtiene los hijos del usuario actual
    $child= $user->child;

    // Retorna la vista con la lista de hijos
    return view('profile', ['child' => $child]);
}
}
