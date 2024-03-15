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
    //Index ('Dashboard")
    public function index(Request $request)
    {
        $restaurant = $request->user()->restaurant;
        $categories = Category::all();

        $user = $request->user();
        $dishes = Dish::all();
        // aggiungere compact categories
        return view('restaurant.index', compact('restaurant', 'user', 'dishes', 'categories'));
    }
    //Create restaurant
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

        // check img
        if ($request->hasFile('logo')) {
            $logo = $data['logo'];
            $logo_path = Storage::put('images', $data['logo']);
        } else {
            $logo_path = null;
        }

        if ($request->hasFile('wallpaper')) {
            $wallpaper = $data['wallpaper'];
            $wallpaper_path = Storage::put('images', $data['wallpaper']);
        } else {
            $wallpaper_path = null;
        }

        $newRestaurant->name = $data['name'];
        $newRestaurant->adress = $data['adress'];
        $newRestaurant->adress = $data['adress'];
        $newRestaurant->user()->associate($user);
        $newRestaurant->vat_num = $data['vat_num'];
        $newRestaurant->logo = $logo_path;
        $newRestaurant->wallpaper = $wallpaper_path;

        $newRestaurant->save();

        $newRestaurant->categories()->attach($data['category_id']);

        return redirect()->route('restaurant.index');

    }
}
