<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genre;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data = Movie::with('genre')->get();
        $totalMovies = Movie::count();
        return view('backend.dashboard.dashboard' ,compact('data','totalMovies'));
    }
}
