<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// importazione dei model
use App\Models\Restaurant;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Order;

class ApiController extends Controller
{

    // funzione per richiamare le categorie
    public function getCategory()
    {
        $categories = Category::all();

        return response()->json([
            'categories' => $categories,
        ]);
    }

    // funzione per richiamare i ristoranti
    public function getRestaurant()
    {
        $restaurants = Restaurant::all();

        return response()->json([
            'restaurants' => $restaurants,
        ]);
    }

    // funzione per richiamare i piatti
    public function getDish()
    {
        $dishes = Dish::all();

        return response()->json([
            'dishes' => $dishes,
        ]);
    }

}
