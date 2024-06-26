<?php

use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SeatController as BackendSeatController;
use App\Http\Controllers\dashboardController as ControllersDashboardController;
use App\Http\Controllers\DashboardController as HttpControllersDashboardController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeatController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SubscriptionPlanController;


use App\Models\Movie;
use App\Models\User;
use Carbon\Carbon;
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
// Route::get('/', [ControllersDashboardController::class, 'index'])
//     ->name('dashboard');

//Route::get('/view/{id}/show', [ControllersDashboardController::class, 'show'])
//    ->name('view.show');
//
Route::get('/', [HomeController::class, 'index'])
    ->middleware('auth')->name('home');  

Route::get('/dashboard/index', [HttpControllersDashboardController::class, 'index'])
    ->name('dashboard.index');
    
Route::get('/movie/index', [MovieController::class, 'index'])->name('movie.index');
Route::get('/movie/create', [MovieController::class, 'create'])->name('movie.create');
Route::post('/movie', [MovieController::class, 'store'])->name('movie.store');
Route::get('/movie/{id}/show', [MovieController::class, 'show'])->name('movie.show');
Route::get('/movies/{id}/edit', [MovieController::class, 'edit'])->name('movies.edit');
Route::put('/movies/{id}', [MovieController::class, 'update'])->name('movies.update');
Route::delete('/movies/{id}', [MovieController::class, 'destroy'])->name('movies.destroy');

Route::get('/genres/index', [GenreController::class, 'index'])->name('genres.list');
Route::get('/genres/create', [GenreController::class, 'create'])->name  ('genres.create');
Route::get('/genres/{id}/', [GenreController::class, 'edit'])->name('genres.edit');
Route::get('/genres/{id}/show', [GenreController::class, 'show'])->name('genres.show');
Route::post('/genres', [GenreController::class, 'store'])->name('genres.store');
Route::delete('/genres/{id}', [GenreController::class, 'destroy'])->name('genres.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
