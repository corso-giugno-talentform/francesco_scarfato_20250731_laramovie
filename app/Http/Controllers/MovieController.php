<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use App\Models\Movie;
use GuzzleHttp\Psr7\Request;
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

    /**
     * Undocumented function
     *
     * @param Movie $movie
     * @param UpdateMovieRequest $request
     * @return void
     */
    public function update(Movie $movie, UpdateMovieRequest $request)
    {
        $coverPath = $movie->cover;
        if ($request->hasFile('cover')) {
            $coverName = $request->file('cover')->getClientOriginalName();
            $coverPath = $request->file('cover')->storeAs('cover', $coverName, 'public');
        }
        
        $data = [
            'title' => $request->title,
            'description' => $request->description,
            'cover' => $coverPath,
            'release_year' => $request->release_year,
            'duration' => $request->duration,
            'genre' => $request->genre,
            'like' => $request->like,
        ];
        $movie->update($data);

        return Redirect::route('movies.index')
            ->with('success', 'Film Aggiornato');
    }

    /**
     * Movie -> modello
     */
    public function show(Movie $movie)
    {
        return view('movies.show', compact('movie'));
    }

    /**
     * Movie -> modello
     */
    public function edit(Movie $movie)
    {
       return view('movies.edit', compact('movie'));
    }

    /**
     * Movie -> modello
     */
    public function destroy(Movie $movie)
    {
        $movie->delete();
        return Redirect::route('movies.index')
            ->with('success', 'Film Eliminato');
    }
}
