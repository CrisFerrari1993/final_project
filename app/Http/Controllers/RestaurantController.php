<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Order;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant :: all();
        $users = User :: all();

        return view('restaurants.index', compact('restaurants', 'users'));
    }

    public function create(){

        $restaurants = Restautant :: all();
        $categories = Category :: all();
        $dishes = Dish :: all();

        return view('restaurants.create', compact('restaurants', 'categories', 'dishes'));


    }
}
