<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\View\View;

use App\Http\Requests\RestaurantFormRequest;

use Illuminate\Support\Facades\Storage;

use App\Models\Category;
use App\Models\Restaurant;


class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     */
    public function create(): View
    {
        $categories = Category::all();
        return view('auth.register', compact('categories'));
    }

    /**
     * Handle an incoming registration request.
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(RestaurantFormRequest $request): RedirectResponse
    {



        $request->validate([
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:' . User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'firstName' => $request->firstName,
            'lastName' => $request->lastName,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

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

        return redirect(RouteServiceProvider::HOME);
    }
}
