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
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'required|image',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'synopsis' => 'required',
            'genre_id' => 'nullable|exists:genres,id',
            'movie_url' => 'nullable|url',  // Add validation rule for movie_url
        ]);
    
        // Handle file upload for poster
        if ($request->hasFile('poster_url')) {
            $fileName = time() . '.' . $request->poster_url->extension();
            $request->poster_url->move(public_path('uploads'), $fileName);
            $validated['poster_url'] = 'uploads/' . $fileName;
        }
    
        // Create the movie
        $movie = Movie::create($validated);
    
        return redirect()->route('movie.index')->with('success', 'Movie has been created successfully!');
    }
    
    public function update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'nullable|image',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'synopsis' => 'required',
            'genre_id' => 'nullable|exists:genres,id',
            'movie_url' => 'nullable|url',  // Add validation rule for movie_url
        ]);
    
        // Find the movie
        $movie = Movie::findOrFail($id);
    
        // Handle image upload if a new image is provided
        if ($request->hasFile('poster_url')) {
            // Delete the old poster if it exists
            if ($movie->poster_url && file_exists(public_path($movie->poster_url))) {
                unlink(public_path($movie->poster_url));
            }
    
            $fileName = time() . '.' . $request->poster_url->extension();
            $request->poster_url->move(public_path('uploads'), $fileName);
            $validated['poster_url'] = 'uploads/' . $fileName;
        }
    
        // Update the movie details
        $movie->update($validated);
    
        return redirect()->route('movie.index')->with('success', 'Movie has been updated successfully!');
    }
    


    public function show($id)
    {
        $movies = Movie::findOrFail($id);
        return view('backend.movies.view', compact('movies'));
    }

    public function edit($id)
    {
        $genres = Genre::all();
        $movies = Movie::findOrFail($id);
        return view('backend.movies.edit', compact('movies', 'genres'));
    }

    public function destroy($id)
    {
        $movie = Movie::findOrFail($id);
        $movie->delete();

        return redirect()->route('movie.index')->with('success', 'Movie has been deleted successfully!');
    }
}
