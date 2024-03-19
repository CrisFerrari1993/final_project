<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{
    public function index($restaurant_id)
    {
        $Dishes = Dish::where('restaurant_id', $restaurant_id)->get();
        $data = [
            "success" => true,
            "results" => $dishes
        ];
        return response()->json($data);
    }

    public function show($restaurant_id, $id)
    {
        $Dish = Dish::where('restaurant_id', $restaurant_id)->findOrFail($id);
        $data = [
            "success" => true,
            "results" => $product
        ];
        return response()->json($data);
    }
}
