<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Models\Movie;
use Illuminate\Support\Facades\Redirect;

class MovieController extends Controller
{
    /**
     * Undocumented function
     *
     * @return void
     */
    public function index()
    {
        $movies = Movie::orderBy('title', 'asc')->get();

        return view('movies.index', compact('movies'));
    }

    public function create()
    {
       return view('movies.create');
    }

    /**
     *
     * @param StoreBookRequest $request
     * @return void
     */
    public function store(StoreMovieRequest $request)
    {
        $coverName = $request->file('cover')->getClientOriginalName();
        $coverPath = $request->file('cover')->storeAs('cover', $coverName, 'public');

        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'cover' => $coverPath,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'like' => $request->like,
        ];

        Movie::create($data);

        return Redirect::route('movies.index')
            ->with('success', 'Film inserito correttamente');
    }
}
