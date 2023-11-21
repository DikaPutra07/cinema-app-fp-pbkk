<?php

use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodBeverageController;
use App\Models\Movie;
use App\Models\Show;
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
    $movies = Movie::all()->collect();
    return view('dashboard', [
        'top_movies' => $movies->sortByDesc('rating')->take(4),
        'newest_movies' => $movies->sortByDesc('release_date')->take(8),
    ]);
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(MovieController::class)->group(function () {
    Route::get('/movies', 'index')->name('movies-index');
    Route::get('/movies/{movie}', 'detail')->name('movie-detail');
});

Route::controller(ShowController::class)->group(function () {
    Route::get('/shows/{show}', 'detail')->name('show-detail');
});

Route::controller(ReservationController::class)->group(function () {
    Route::post('/reservations', 'store')->name('reservation-store');
    Route::delete('/reservations/{reservation}', 'destroy')->name('reservation-destroy');
});

Route::get('/contact', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/foodandbeverages', [FoodBeverageController::class, 'index'])->name('foodandbeverages-index');
Route::get('/foodandbeverages/category/{category}', [FoodBeverageController::class, 'categories'])->name('foodandbeverages-categories');
Route::get('/foodandbeverages/detail', [FoodBeverageController::class, 'detail'])->name('foodandbeverages-detail');
Route::get('/foodandbeverages/cart', [FoodBeverageController::class, 'cart'])->name('foodandbeverages-cart');

require __DIR__.'/auth.php';
