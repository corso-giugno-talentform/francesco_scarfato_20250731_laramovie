<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class PageController extends Controller
{
    public function homepage()
    {
        $movies = Movie::latest()->take(3)->get();

        return view('homepage', compact('movies'));
    }
}
