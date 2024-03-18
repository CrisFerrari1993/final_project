<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// import ApiController
use App\Http\Controllers\ApiController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// ROTTE API

Route::group(['prefix' => '/v1'], function () {

    // getCategory
    Route::get('/categories', [ApiController::class, 'getCategory']);

    // getRestaurant
    Route::get('/restaurants', [ApiController::class, 'getRestaurant']);

});