<?php

namespace App\Http\Controllers;

use App\Models\Child;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showProfile()
{
    $children = Child::where('user_id', Auth::id())->get();

    // Retorna la vista con la lista de hijos
    return view('user.profile', ['children' => $children]);
}
}
