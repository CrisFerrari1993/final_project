<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Restaurant;
use App\Models\User;

class RestaurantController extends Controller
{
    public function index(){
        $restaurants = Restaurant :: all();
        $users = User :: all();

        return view('restaurants.index', compact('restaurants', 'users'));
    }
}
