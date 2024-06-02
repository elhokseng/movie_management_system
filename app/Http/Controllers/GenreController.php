<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;
use App\Models\Movie;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return view('backend.Genres.list' ,compact('genres'));
    }

    public function create()
    {
        
        return view('backend.movies.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create([
            'name' => $request->name,
        ]);

        return response()->json(['message' => 'Genre created successfully', 'genre' => $genre], 201);
    }

    public function show($id)
    {
        // $movies = Movie::with('genre')->findOrFail($id);

        // return view('backend.movies.view', compact('movies'));
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);

        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre->update($validated);

        return response()->json(['message' => 'Genre updated successfully', 'genre' => $genre]);
    }

    public function destroy($id)
    {
        $genre = Genre::findOrFail($id);
        $genre->delete();

        return response()->json(['message' => 'Genre deleted successfully']);
    }
}