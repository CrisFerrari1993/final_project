<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\DishController;

use App\Models\Restaurant;

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
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', [RestaurantController::class, 'index'])
        ->name('restaurant.index');

    Route::get('/create', [RestaurantController::class, 'create'])
        ->name('restaurant.create');

    Route::post('/', [RestaurantController::class, 'store'])
        ->name('restaurant.store');

    Route::get('/profile', [ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])
        ->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])
        ->name('profile.destroy');


    // rotta protette da auth per i piatti
    route::get('dish/create', [DishController::class , 'create'])
        ->name('dish.create');
    Route::post('/dish/create', [DishController::class , 'store'])
        ->name('dish.store');
});

require __DIR__ . '/auth.php';
