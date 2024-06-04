<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(Request $request)
    {
        $movies = Movie::with('genre')->get();

        if ($request->expectsJson()) {
            return response()->json($movies);
        }

        return view('backend.movies.list', compact('movies'));
        // return response()->json($movies);   
    }

    public function create()
    {
        $genres = Genre::all();
        return view('backend.movies.create', compact('genres'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'required|image',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'synopsis' => 'required',
            'genre_id' => 'nullable|exists:genres,id',
            'movie_url' => 'nullable|url',
        ]);

        if ($request->hasFile('poster_url')) {
            $fileName = time() . '.' . $request->poster_url->extension();
            $request->poster_url->move(public_path('uploads'), $fileName);
            $validated['poster_url'] = 'uploads/' . $fileName;
        }

        $movie = Movie::create($validated);

        return response()->json(['message' => 'Movie has been created successfully!', 'movie' => $movie], 201);

        // return redirect()->route('movie.index')->with('success', 'Movie has been created successfully!');
    }

    public function show(Request $request, $id)
    {
        $movies = Movie::with('genre')->findOrFail($id);

        if ($request->expectsJson()) {
            return response()->json($movies);
        }

        return view('backend.movies.view', compact('movies'));
    }

    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        $genres = Genre::all();
        return view('backend.movies.edit', compact('movies', 'genres'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'nullable|image',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'synopsis' => 'required',
            'genre_id' => 'nullable|exists:genres,id',
            'movie_url' => 'nullable|url',
        ]);

        $movies = Movie::findOrFail($id);

        if ($request->hasFile('poster_url')) {
            if ($movies->poster_url && file_exists(public_path($movies->poster_url))) {
                unlink(public_path($movies->poster_url));
            }

            $fileName = time() . '.' . $request->poster_url->extension();
            $request->poster_url->move(public_path('uploads'), $fileName);
            $validated['poster_url'] = 'uploads/' . $fileName;
        }

        $movies->update($validated);

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Movie has been updated successfully!', 'movies' => $movies]);
        }

        return redirect()->route('movie.index')->with('success', 'Movie has been updated successfully!');
    }

    public function destroy(Request $request, $id)
    {
        $movies = Movie::findOrFail($id);
        if ($movies->poster_url && file_exists(public_path($movies->poster_url))) {
            unlink(public_path($movies->poster_url));
        }
        $movies->delete();

        if ($request->expectsJson()) {
            return response()->json(['message' => 'Movie has been deleted successfully!']);
        }

        return redirect()->route('movie.index')->with('success', 'Movie has been deleted successfully!');
    }
}
