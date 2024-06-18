<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $datas = Movie::with('genre')->get();
        $genres = Genre::all();
        $totalMovies = Movie::count();

        $moviesPerGenre = Movie::select('genre_id', DB::raw('count(*) as total'))
        ->groupBy('genre_id')
        ->with('genre')
        ->get();


        // Attach genre names to the count data
        $moviesPerGenre = $moviesPerGenre->map(function($item) {
            $item->genre_name = Genre::find($item->genre_id)->name;
            return $item;
        });

        return view('backend.dashboard.dashboard' ,compact('datas','totalMovies' ,'moviesPerGenre'));
    }
}
