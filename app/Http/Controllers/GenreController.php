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
        // This method is not needed for the API
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
        $genre = Genre::with('movies')->find($id);
        if (!$genre) {
            return response()->json(['error' => 'Genre not found'], 404);
        }
        return response()->json($genre);
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