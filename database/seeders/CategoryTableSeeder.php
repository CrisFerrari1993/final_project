<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// import model
use App\Models\Category;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // creazione delle categorie

        $arrayCat = array(
            'Italiano' => 'Italiano',
            'Cinese' => 'Cinese',
            'Messicano' => 'Messicano',
            'Sushi' => 'Sushi',
            'Italiano' => 'Italiano',
            'Etnico' => 'Etnico',
            'Kebab' => 'Kebab',
            'Della nonna' => 'Della nonna',
        );
        
        foreach($arrayCat as $arr){
            $category = new Category();
            $category->name = $arr;
            $category->save();
        }

        // $category = new Category();
        // $category->name = 'Italiano';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Cinese';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Messicano';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Sushi';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Etnico';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Tipico';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Kebab';
        // $category->save();

        // $category = new Category();
        // $category->name = 'Della nonna';
        // $category->save();

    }

}