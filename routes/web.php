<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ShowController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FoodBeverageController;
use App\Http\Controllers\OrderFoodBeverageController;
use App\Http\Controllers\ProfileNizamController;
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

Route::controller(FoodBeverageController::class)->group(function () {
    Route::get('/foodandbeverages', 'index')->name('foodandbeverages-index');
    Route::get('/foodandbeverages/category/{category}', 'categories')->name('foodandbeverages-categories');
    Route::get('/foodandbeverages/detail/{fnb}', 'detail')->name('foodandbeverages-detail');
    Route::delete('/foodandbeverages/delete/{fnb}', 'destroy')->name('foodandbeverages-destroy');
    Route::patch('/foodandbeverages/edit/{fnb}', 'update')->name('foodandbeverages-update');
    Route::get('/foodandbeverages/edit/{fnb}', 'edit')->name('foodandbeverages-edit');
    Route::get('/foodandbeverages/create', 'create')->name('foodandbeverages-create');
    Route::post('/foodandbeverages', 'store')->name('foodandbeverages-store');
});

Route::controller(CartController::class)->group(function () {
    Route::get('/foodandbeverages/cart', 'index')->middleware(['auth', 'verified'])->name('cart-index');
    Route::post('/foodandbeverages/cart/create', 'store')->middleware(['auth', 'verified'])->name('cart-store');
    Route::delete('/foodandbeverages/cart/delete/{cartid}', 'destroy')->middleware(['auth', 'verified'])->name('cart-destroy');
});

Route::controller(OrderFoodBeverageController::class)->group(function () {
    Route::post('/foodandbeverages/order', 'store')->name('order-store');
})->middleware(['auth', 'verified']);

Route::controller(ProfileController::class)->group(function () {
    Route::get('/profile', 'index')->name('profilenizam-index');
    Route::put('/profile/edit/{id}', 'update')->name('profilenizam-update');
})->middleware(['auth', 'verified']);

// Route::get('/foodandbeverages', [FoodBeverageController::class, 'index'])->name('foodandbeverages-index');
// Route::get('/foodandbeverages/category/{category}', [FoodBeverageController::class, 'categories'])->name('foodandbeverages-categories');
// Route::get('/foodandbeverages/detail/{fnb}', [FoodBeverageController::class, 'detail'])->name('foodandbeverages-detail');

// Route::get('/foodandbeverages/cart', [CartController::class, 'index'])->name('cart-index');
// Route::post('/foodandbeverages/cart/create', [CartController::class, 'store'])->name('cart-store');
// Route::delete('/foodandbeverages/cart/delete/{cartid}', [CartController::class, 'destroy'])->name('cart-destroy');

// Route::post('/foodandbeverages/order',[OrderFoodBeverageController::class, 'store'])->name('order-store');

// Route::get('/profilenizam', [ProfileNizamController::class, 'index'])->name('profilenizam-index');
// Route::put('/profilenizam/edit/{id}', [ProfileNizamController::class, 'update'])->name('profilenizam-update');

require __DIR__.'/auth.php';
