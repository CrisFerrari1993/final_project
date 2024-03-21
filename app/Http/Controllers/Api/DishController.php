<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index($restaurant_id)
    {
        $dishes = Dish::all()->where('restaurant_id', $restaurant_id);
        $data = [
            "success" => true,
            "results" => $dishes
        ];
        return response()->json($data);
    }

    public function show($restaurant_id, $id)
    {
        $dish = Dish::where('restaurant_id', $restaurant_id)->findOrFail($id);
        $data = [
            "success" => true,
            "results" => $dish
        ];
        return response()->json($data);
    }
}
