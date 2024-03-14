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
    //Index ('Dashboard")
    public function index(){
        $restaurants = Restaurant :: all();
        $users = User :: all();

        return view('restaurant.index', compact('restaurants', 'users'));
    }
    //Create restaurant
    public function create(){

        $restaurants = Restaurant :: all();
        $categories = Category :: all();
        $dishes = Dish :: all();

        return view('restaurant.create', compact('restaurants', 'categories', 'dishes'));

    }
}
