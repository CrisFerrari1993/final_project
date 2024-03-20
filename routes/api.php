<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DishController;
use App\Http\Controllers\Api\RestaurantController;
use App\Http\Controllers\Api\ProductControllerController;
use App\Http\Controllers\Api\ApiController;
use App\Models\Category;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


// ROTTE API
Route::get('restaurants', [RestaurantController::class, "index"]);

// Rotte per visualizzare i dettagli di un ristorante specifico
Route::get('restaurants/{id}', [RestaurantController::class, "show"]);

// Rotte per visualizzare i prodotti di un ristorante specifico
Route::get('restaurants/{restaurant_id}/dishes', [DishController::class, "index"]);

// Rotte per filtrare i ristoranti in base alle categorie
Route::get('restaurants/categories/{category_id}', [RestaurantController::class, "filterByCategory"]);

// Rotte per visualizzare l'elenco delle categorie
Route::get('categories', [CategoryController::class, "index"]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

