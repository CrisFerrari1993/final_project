<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Category;
use App\Models\Dish;
use App\Models\Order;

class RestaurantController extends Controller
{
    public function index()
    {
        $restaurants = Restaurant::all();
        $users = User::all();

        return view('restaurant.index', compact('restaurants', 'users'));
    }

    public function create()
    {

        $restaurants = Restaurant::all();
        $categories = Category::all();
        $dishes = Dish::all();
        $users = User::all();

        return view('restaurant.create', compact('restaurants', 'categories', 'dishes', 'users'));


    }

    public function store(Request $request)
    {

        $data = $request->all();

        $user = $request->user();

        $newRestaurant = new Restaurant();

        $newRestaurant->name = $data['name'];
        $newRestaurant->adress = $data['adress'];
        $newRestaurant->adress = $data['adress'];
        $newRestaurant->user()->associate($user);

        // capire come popolare le colonne contenenti immagini (logo e wallpaper)

        $newRestaurant->vat_num = $data['vat_num'];

        $newRestaurant->save();

        $newRestaurant->categories()->attach($data['category_id']);

        return redirect()->route('restaurant.index');

    }
}
