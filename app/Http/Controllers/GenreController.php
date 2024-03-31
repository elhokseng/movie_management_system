<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        $genres = Genre::all();
        return response()->json($genres);
    }

    public function create()    
    {
        return view('backend.create_genres');
    }   

    public function store(Request $request)
    {
        $validated = $request->validate([
            'genre' => 'required|string|max:255',
        ]);

        Genre::create([
            'name' => $request->genre,
        ]);
        return redirect()->route('genres.create')->with('success', 'Genres updated successfully.');
    }

    public function show($id)
    {
        $genre = Genre::find($id);
        return response()->json($genre);
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::findOrFail($id);
        $genre->update($request->all());
        return response()->json($genre);
    }

    public function destroy($id)
    {
        Genre::findOrFail($id)->delete();
        return response()->json(['message' => 'Genre deleted']);
    }
}
