<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import model
use App\Models\Category;
use App\Models\Restaurant;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // random selection for category elements
        Category::factory()->count(8)->create()->each(function ($category) {
            $restaurants = Restaurant::inRandomOrder()->limit(rand(2, 8))->get();
            $category->restaurants()->attach($restaurants);
            $category->save();
        });
    }
}
