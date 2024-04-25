<?php

namespace App\Http\Controllers\backendController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class DashboardController extends Controller
{
    public function index()
    {
        $all_movies = Movie::get();
        $totalMovies = $all_movies->count();

        return view('backend.dashboard.dashboard',compact('totalMovies'));
    }
}
