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
        return view('backend.Genres.list', compact('genres'));
    }

    public function show(Request $request, $id)
    {
        $movies = Movie::with('genre')->where('genre_id', $id)->get();

        return response()->json($movies);   
        // return view('backend.Genres.view', compact('movies'));
    }

    public function create()
    {
        return view('backend.Genres.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $genre = Genre::create($validated);

        return redirect()->route('genres.create')->with('success', 'Genre has been created successfully!');
    }

    public function edit($id)
    {
        $genre = Genre::findOrFail($id);
        return view('genres.edit', compact('genre'));
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

        return redirect()->route('genres.list')->with('success', 'Genre has been delete successfully!');
    }
}
