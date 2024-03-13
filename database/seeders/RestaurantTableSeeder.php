<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Restaurant;

class RestaurantTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $restaurant = new Restaurant();

        $restaurant -> name = 'Trattoria del cugino';
        $restaurant -> adress = 'Viale Sarca 10, 20121 Milano (MI)';
        $restaurant -> logo = 'https://t4.ftcdn.net/jpg/02/75/70/03/360_F_275700347_09reCCwb7JBxTKiYQXsyri4riMKaHbj8.jpg';
        $restaurant -> wallpaper = 'https://t4.ftcdn.net/jpg/02/75/70/03/360_F_275700347_09reCCwb7JBxTKiYQXsyri4riMKaHbj8.jpg';
        $restaurant -> vat_num = '15784961542739';
        $restaurant -> user_id =  1 ;

        $restaurant -> save();
    }
}
