<?php

namespace App\Http\Controllers;
use App\Models\Movie;

use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public function index()
    {
        $movies = Movie::with('genre')->get();
        return view('dashboard', compact('movies'));
    }


    public function show($id)
    {
        $movies = Movie::findOrFail($id);
        return view('frontend.view',compact('movies'));
    }

}
