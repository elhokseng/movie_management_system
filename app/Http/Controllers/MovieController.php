<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use App\Models\Movie;

class MovieController extends Controller
{
    // Display a listing of the movies
    public function index()
    {
        $movies = Movie::with('genre')->get();
        return response()->json($movies);
    }

    public function create()
    {
        try {
            $genres = Genre::select('id', 'name')->get();
            return view('backend.movies.create', compact('genres'));
        } catch (\Exception $e) {
            return back()->withError('Failed to load genres. Please try again later.');
        }
    }
    

    // Store a new movie
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:255',
            'poster_url' => 'required|image',
            'release_date' => 'required|date',
            'duration' => 'required|numeric',
            'synopsis' => 'required',
            'genre' => 'nullable'
        ]);

        if ($request->hasFile('poster_url')) {
            $fileName = time().'.'.$request->poster_url->extension();  
            $request->poster_url->move(public_path('uploads'), $fileName);
            $validatedData['poster_url'] = 'uploads/' . $fileName;
        }

        Movie::create($validated);

        return redirect()->route('movie.create')->with('success', 'Movie details submitted successfully!');
    }
    
    // Show a single movie
    public function show($id)
    {
        $movie = Movie::with('genre')->find($id);
        if(!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        return response()->json($movie);
    }

    // Update a movie
    public function update(Request $request, $id)
    {
        $movie = Movie::find($id);
        if(!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $movie->update($request->all());
        return response()->json($movie);
    }

    // Delete a movie
    public function destroy($id)
    {
        $movie = Movie::find($id);
        if(!$movie) {
            return response()->json(['message' => 'Movie not found'], 404);
        }

        $movie->delete();
        return response()->json(['message' => 'Movie deleted']);
    }
}
