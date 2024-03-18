<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Category;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurants = [
            [
                'name' => 'Ristorante Bella Vista',
                'adress' => 'Via Roma 123',
                'logo' => 'path_to_logo_image_1.png',
                'wallpaper' => 'path_to_wallpaper_image_1.jpg',
                'vat_num' => '012345789012345',
                'visibility' => true,
            ],
            [
                'name' => 'Trattoria del Nonno',
                'adress' => 'Via Garibaldi 45',
                'logo' => 'path_to_logo_image_2.png',
                'wallpaper' => 'path_to_wallpaper_image_2.jpg',
                'vat_num' => '09876321098765',
                'visibility' => true,
            ],
            [
                'name' => 'Pizzeria Buon Gusto',
                'adress' => 'Corso Italia 78',
                'logo' => 'path_to_logo_image_3.png',
                'wallpaper' => 'path_to_wallpaper_image_3.jpg',
                'vat_num' => '11223355667788',
                'visibility' => false,
            ],
            [
                'name' => 'Ristorante del Porto',
                'adress' => 'Via del Porto 10',
                'logo' => 'path_to_logo_image_4.png',
                'wallpaper' => 'path_to_wallpaper_image_4.jpg',
                'vat_num' => '98765310987654',
                'visibility' => true,
            ],
            [
                'name' => 'Osteria Al Bersaglio',
                'adress' => 'Via dei Tirolesi 32',
                'logo' => 'path_to_logo_image_5.png',
                'wallpaper' => 'path_to_wallpaper_image_5.jpg',
                'vat_num' => '45678123456789',
                'visibility' => true,
            ],
            [
                'name' => 'Trattoria La Famiglia',
                'adress' => 'Via Veneto 5',
                'logo' => 'path_to_logo_image_6.png',
                'wallpaper' => 'path_to_wallpaper_image_6.jpg',
                'vat_num' => '5678901234567890',
                'visibility' => false,
            ],
            [
                'name' => 'Ristorante La Terrazza',
                'adress' => 'Via delle Rose 17',
                'logo' => 'path_to_logo_image_7.png',
                'wallpaper' => 'path_to_wallpaper_image_7.jpg',
                'vat_num' => '234567890234567',
                'visibility' => true,
            ],
            [
                'name' => 'Pizzeria Napoli',
                'adress' => 'Corso Umberto 101',
                'logo' => 'path_to_logo_image_8.png',
                'wallpaper' => 'path_to_wallpaper_image_8.jpg',
                'vat_num' => '345678901345678',
                'visibility' => true,
            ],
            [
                'name' => 'Ristorante La Gondola',
                'adress' => 'Piazza San Marco 7',
                'logo' => 'path_to_logo_image_9.png',
                'wallpaper' => 'path_to_wallpaper_image_9.jpg',
                'vat_num' => '678901234568901',
                'visibility' => false,
            ],
            [
                'name' => 'Trattoria Alla Fontana',
                'adress' => 'Via della Fontana 22',
                'logo' => 'path_to_logo_image_10.png',
                'wallpaper' => 'path_to_wallpaper_image_10.jpg',
                'vat_num' => '789012356789012',
                'visibility' => true,
            ],
            [
                'name' => 'Ristorante La Perla',
                'adress' => 'Via Roma 56',
                'logo' => 'path_to_logo_image_11.png',
                'wallpaper' => 'path_to_wallpaper_image_11.jpg',
                'vat_num' => '890234567890123',
                'visibility' => true,
            ],
            [
                'name' => 'Osteria Il Rifugio',
                'adress' => 'Via dei Pini 19',
                'logo' => 'path_to_logo_image_12.png',
                'wallpaper' => 'path_to_wallpaper_image_12.jpg',
                'vat_num' => '9012345678901234',
                'visibility' => false,
            ],
            [
                'name' => 'Ristorante Il Gambero',
                'adress' => 'Lungomare 4',
                'logo' => 'path_to_logo_image_13.png',
                'wallpaper' => 'path_to_wallpaper_image_13.jpg',
                'vat_num' => '456789012345689',
                'visibility' => true,
            ],
            [
                'name' => 'Pizzeria Da Mario',
                'adress' => 'Via Garibaldi 87',
                'logo' => 'path_to_logo_image_14.png',
                'wallpaper' => 'path_to_wallpaper_image_14.jpg',
                'vat_num' => '345678901234578',
                'visibility' => true,
            ],
            [
                'name' => 'Ristorante Delizia',
                'adress' => 'Corso Vittorio Emanuele 3',
                'logo' => 'path_to_logo_image_15.png',
                'wallpaper' => 'path_to_wallpaper_image_15.jpg',
                'vat_num' => '567890123567890',
                'visibility' => false,
            ],
        ];

        $users = User::inRandomOrder()->get();

        $categories = Category::inRandomOrder()->get();

        foreach ($restaurants as $restaurant) {

            $new_restaurant = new Restaurant();

            // Prendi un utente casuale
            $user = $users->shift(); // Rimuovi l'utente dalla lista per evitare il riassegnamento

            $new_restaurant->user()->associate($user);

            // associo la categoria
                      
            $new_restaurant -> categories()->attach($categories);

            $new_restaurant->name = $restaurant['name'];
            $new_restaurant->adress = $restaurant['adress'];
            $new_restaurant->logo = $restaurant['logo'];
            $new_restaurant->wallpaper = $restaurant['wallpaper'];
            $new_restaurant->vat_num = $restaurant['vat_num'];
            $new_restaurant->visibility = $restaurant['visibility'];

            //Salvo
            $new_restaurant->save();
        } 
    }  
}
