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
                'logo' => 'images/414489695_122093052644185593_9176308972313627207_n.jpg',
                'wallpaper' => 'images/wallapaer_3.jpeg',
                'vat_num' => '012345789012345',
                'visibility' => true,
            ],
            [
                'name' => 'Trattoria del Nonno',
                'adress' => 'Via Garibaldi 45',
                'logo' => 'images/nonno.jpeg',
                'wallpaper' => 'images/wallappaer_1.jpeg',
                'vat_num' => '09876321098765',
                'visibility' => true,
            ],
            [
                'name' => 'Pizzeria Buon Gusto',
                'adress' => 'Corso Italia 78',
                'logo' => 'images/buon-gusto.jpg',
                'wallpaper' => 'images/wallpaper_2.jpeg',
                'vat_num' => '11223355667788',
                'visibility' => false,
            ],
            [
                'name' => 'Ristorante del Porto',
                'adress' => 'Via del Porto 10',
                'logo' => 'images/del-porto.png',
                'wallpaper' => 'images/wallapaer_3.jpeg',
                'vat_num' => '98765310987654',
                'visibility' => true,
            ],
            [
                'name' => 'Osteria Al Bersaglio',
                'adress' => 'Via dei Tirolesi 32',
                'logo' => 'images/al-bersaglio.jpg',
                'wallpaper' => 'images/wallappaer_1.jpeg',
                'vat_num' => '45678123456789',
                'visibility' => true,
            ],
            [
                'name' => 'Trattoria La Famiglia',
                'adress' => 'Via Veneto 5',
                'logo' => 'images/trattoria-la-famiglia.jpg',
                'wallpaper' => 'images/wallpaper_2.jpeg',
                'vat_num' => '5678901234567890',
                'visibility' => false,
            ],
            [
                'name' => 'Ristorante La Terrazza',
                'adress' => 'Via delle Rose 17',
                'logo' => 'images/laterrazza.png',
                'wallpaper' => 'images/wallapaer_3.jpeg',
                'vat_num' => '234567890234567',
                'visibility' => true,
            ],
            [
                'name' => 'Pizzeria Napoli',
                'adress' => 'Corso Umberto 101',
                'logo' => 'images/pizzeria-napoli.jpg',
                'wallpaper' => 'images/wallappaer_1.jpeg',
                'vat_num' => '345678901345678',
                'visibility' => true,
            ],
            [
                'name' => 'Ristorante La Gondola',
                'adress' => 'Piazza San Marco 7',
                'logo' => 'images/la_gondola.jpeg',
                'wallpaper' => 'images/wallpaper_2.jpeg',
                'vat_num' => '678901234568901',
                'visibility' => false,
            ],
            [
                'name' => 'Trattoria Alla Fontana',
                'adress' => 'Via della Fontana 22',
                'logo' => 'images/fontana.png',
                'wallpaper' => 'images/wallapaer_3.jpeg',
                'vat_num' => '789012356789012',
                'visibility' => true,
            ],
            [
                'name' => 'Ristorante La Perla',
                'adress' => 'Via Roma 56',
                'logo' => 'images/la_perla.png',
                'wallpaper' => 'images/wallappaer_1.jpeg',
                'vat_num' => '890234567890123',
                'visibility' => true,
            ],
            [
                'name' => 'Osteria Il Rifugio',
                'adress' => 'Via dei Pini 19',
                'logo' => 'images/il_rifugio.png',
                'wallpaper' => 'images/wallpaper_2.jpeg',
                'vat_num' => '9012345678901234',
                'visibility' => false,
            ],
            [
                'name' => 'Ristorante Il Gambero',
                'adress' => 'Lungomare 4',
                'logo' => 'images/il_gambero.png',
                'wallpaper' => 'images/wallapaer_3.jpeg',
                'vat_num' => '456789012345689',
                'visibility' => true,
            ],
            [
                'name' => 'Pizzeria Da Mario',
                'adress' => 'Via Garibaldi 87',
                'logo' => 'images/pizzeria_da_mario.png',
                'wallpaper' => 'images/wallappaer_1.jpeg',
                'vat_num' => '345678901234578',
                'visibility' => true,
            ],
            [
                'name' => 'Ristorante Delizia',
                'adress' => 'Corso Vittorio Emanuele 3',
                'logo' => 'images/delizia.png',
                'wallpaper' => 'images/wallpaper_2.jpeg',
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
