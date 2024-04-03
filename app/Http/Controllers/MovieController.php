<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('backend.movies.list', compact('movies'));
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
            'genre_id' => 'nullable|exists:genres,id'
        ]);

        if ($request->hasFile('poster_url')) {
            $fileName = time() . '.' . $request->poster_url->extension();
            $request->poster_url->move(public_path('uploads'), $fileName);
            $validated['poster_url'] = 'uploads/' . $fileName;
        }

        Movie::create($validated);

        return redirect()->route('movie.create')->with('success', 'Movie has been created successfully!');
    }

    public function show()
    {
        $movies = Movie::all();
        return view('backend.movies.view',compact('movies'));
    }

    public function edit($id)
    {
        $movies = Movie::findOrFail($id);
        return view('backend.movies.view', compact('movies'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'nullable|image',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'synopsis' => 'required',
            'genre_id' => 'nullable|exists:genres,id' // Validate genre_id against the existing genres
        ]);

        $movie = Movie::findOrFail($id);

        // Update movie details
        $movie->update($validated);

        // Handle image upload if a new image is provided
        if ($request->hasFile('poster_url')) {
            $fileName = time() . '.' . $request->poster_url->extension();
            $request->poster_url->move(public_path('uploads'), $fileName);
            $movie->poster_url = 'uploads/' . $fileName;
            $movie->save();
        }

        return redirect()->route('movies.index')->with('success', 'Movie has been updated successfully!');
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('movies.index')->with('success', 'Movie has been deleted successfully!');
    }
}
