<?php

use App\Http\Controllers\Api\OrderController;
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

Route::get('welcome', function () {
    return view('welcome');
    
});

Route::get('/welcome', [RestaurantController :: class, 'index'])->name('restaurant.index');


Route::get('/welcome', function () {
    return view('restaurant.index');
    
})->middleware(['auth', 'verified'])->name('/welcome');



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


    // rotte protette da auth per i piatti
    route::get('dish/create', [DishController::class , 'create'])
        ->name('dish.create');

    Route::post('/dish/create', [DishController::class , 'store'])
        ->name('dish.store');

    Route::get('/{id}/edit', [DishController ::class, 'edit'])
        ->name('dish.edit');
    
    Route::put('/{id}/edit', [DishController :: class, 'update'])
        ->name('dish.update');

    Route::get('/dish/{id}', [DishController :: class, 'show'])
        ->name('dish.show');

    Route::delete('/dish/{id}', [DishController :: class, 'destroy'])
        ->name('dish.destroy');


    
    // rotte protette per i ristoranti
    Route::get('/restaurant/edit/{id}', [RestaurantController :: class, 'edit'])
        ->name('restaurant.edit');

    Route::put('/restaurant/edit/{id}', [RestaurantController :: class, 'update'])
        ->name('restaurant.update');


    // rotte protette per gli ordini
    Route::get('/restaurant/{id}/orders', [OrderController :: class, 'show'])
        ->name('order.show');
});

require __DIR__ . '/auth.php';
