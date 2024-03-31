<?php

use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
}); 

Route::get('/dashboard', function () {
    return view('backend.dashboard.admin');
})->middleware(['auth', 'verified'])->name('dashboard.index');

Route::get('/movie/create', [MovieController::class, 'create'])
    ->name('movie.create');
Route::post('/movie', [MovieController::class, 'store'])
    ->name('movie.store');

Route::get('/genres/create', [GenreController::class, 'create'])
    ->name('genres.create');
Route::post('/genres', [GenreController::class, 'store'])
    ->name('genres.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update'); 
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
}); 

require __DIR__.'/auth.php';
