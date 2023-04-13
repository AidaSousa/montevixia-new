<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    public function index()
    {
        $latest_blogs = Blog::latest()->take(3)->get();

        return view('home', compact('latest_blogs'));
    }
   
}
