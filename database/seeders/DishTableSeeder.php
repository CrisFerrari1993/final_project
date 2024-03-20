<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Restaurant;
use App\Models\User;
use App\Models\Category;
use App\Models\Dish;
use Faker\Guesser\Name;

class DishTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dishes = [
            [
                'name' => 'Spaghetti Carbonara',
                'image' => 'images/spaghetti_carbonara.jpeg',
                'description' => 'Un classico piatto italiano fatto con spaghetti, uova, pancetta, e formaggio.',
                'price' => '12.99',
                'aviability' => true,
            ],
            [
                'name' => 'Pizza Margherita',
                'image' => 'images/pizza_margherita.jpeg',
                'description' => 'Una deliziosa pizza con pomodoro, mozzarella, basilico, e olio d\'oliva.',
                'price' => '10.99',
                'aviability' => true,
            ],
            [
                'name' => 'Insalata Caprese',
                'image' => 'images/insalata_caprese.png',
                'description' => 'Un\'insalata fresca con pomodoro, mozzarella di bufala, basilico, e olio d\'oliva.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Risotto ai Funghi',
                'image' => 'images/risotto_funghi.jpg',
                'description' => 'Un cremoso risotto condito con funghi porcini e parmigiano.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Tagliatelle al Ragu',
                'image' => 'images/tagliatelle_ragu.jpg',
                'description' => 'Tagliatelle fatte in casa servite con un ricco ragù di carne.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Cotoletta alla Milanese',
                'image' => 'images/cotoletta_milanese.jpg',
                'description' => 'Una gustosa cotoletta di vitello impanata e fritta.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Lasagna al Forno',
                'image' => 'images/lasagna.jpg',
                'description' => 'Strati di pasta, carne macinata, salsa di pomodoro e formaggio, cotti al forno.',
                'price' => '15.99',
                'aviability' => true,
            ],
            [
                'name' => 'Bruschetta Pomodoro e Basilico',
                'image' => 'images/bruschetta.jpg',
                'description' => 'Fette di pane tostato condite con pomodoro fresco, basilico e olio d\'oliva.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Tiramisù',
                'image' => 'images/tiramisu.jpg',
                'description' => 'Un dessert al cucchiaio fatto con savoiardi, caffè, mascarpone e cacao in polvere.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Osso Buco',
                'image' => 'images/osso_buco.jpg',
                'description' => 'Fettine di vitello con midollo osseo, cotto lentamente in una salsa aromatica.',
                'price' => '18.99',
                'aviability' => true,
            ],
            [
                'name' => 'Carpaccio di Manzo',
                'image' => 'images/carpaccio.jpg',
                'description' => 'Fettine sottili di manzo crudo marinato con olio, limone, rucola e scaglie di Parmigiano.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Gnocchi alla Sorrentina',
                'image' => 'images/gnocchi_sorrentina.jpg',
                'description' => 'Gnocchi di patate con salsa di pomodoro, mozzarella fior di latte e basilico fresco.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Frittura di Calamari',
                'image' => 'images/frittura_calamari.jpg',
                'description' => 'Anelli di calamaro impanati e fritti, serviti con salsa tartara.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Cannoli Siciliani',
                'image' => 'images/cannoli.jpg',
                'description' => 'Dolce siciliano fatto con una croccante pasta di ricotta e cioccolato.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Filetto di Manzo al Pepe Verde',
                'image' => 'images/filetto_pepe_verde.jpg',
                'description' => 'Filetto di manzo cotto alla perfezione e servito con una salsa al pepe verde.',
                'price' => '20.99',
                'aviability' => true,
            ],
            [
                'name' => 'Ravioli di Ricotta e Spinaci',
                'image' => 'images/ravioli_spinaci.jpg',
                'description' => 'Ravioli fatti in casa ripieni di ricotta fresca e spinaci, serviti con burro e salvia.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Bistecca alla Fiorentina',
                'image' => 'images/bistecca_fiorentina.jpg',
                'description' => 'Bistecca di manzo alla griglia, tipica della cucina toscana, servita al sangue con contorno di verdure.',
                'price' => '24.99',
                'aviability' => true,
            ],
            [
                'name' => 'Pollo alla Cacciatora',
                'image' => 'images/pollo_cacciatora.jpg',
                'description' => 'Cosce di pollo rosolate con pomodoro, cipolla, olive, e vino bianco.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Crostata di Frutta',
                'image' => 'images/crostata_frutta.jpg',
                'description' => 'Una crostata fatta in casa con crema pasticcera e frutta fresca di stagione.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Kebab di Agnello',
                'image' => 'images/kebab_agnello.jpg',
                'description' => 'Agnello marinato e grigliato servito con riso pilaf e verdure grigliate.',
                'price' => '17.99',
                'aviability' => true,
            ],
            [
                'name' => 'Hummus',
                'image' => 'images/hummus.jpg',
                'description' => 'Una crema di ceci, tahini, olio d\'oliva, succo di limone e aglio, servita con pane pita.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Baklava',
                'image' => 'images/baklava.jpg',
                'description' => 'Dolce turco composto da strati di pasta fillo, noci e miele.',
                'price' => '6.99',
                'aviability' => true,
            ],
            [
                'name' => 'Doner Kebab',
                'image' => 'images/doner_kebab.jpg',
                'description' => 'Carne di manzo o pollo arrostita verticalmente e servita in un panino con insalata e salse.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Manti',
                'image' => 'images/manti.jpg',
                'description' => 'Ravioli turchi ripieni di carne, serviti con salsa di pomodoro e yogurt.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Pollo alla Szechuan',
                'image' => 'images/pollo_szechuan.jpg',
                'description' => 'Strisce di pollo saltate in padella con peperoncino, peperoncino Szechuan e verdure miste.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Maiale Agrodolce',
                'image' => 'images/maiale_agrodolce.jpg',
                'description' => 'Cubetti di maiale fritti e serviti in una salsa agrodolce con peperoni e ananas.',
                'price' => '12.99',
                'aviability' => true,
            ],
            [
                'name' => 'Anatra alla Pechinese',
                'image' => 'images/anatra_pechinese.jpg',
                'description' => 'Anatra arrosto servita con cipolline, cetrioli, salsa hoisin e pancake sottili.',
                'price' => '19.99',
                'aviability' => true,
            ],
            [
                'name' => 'Gamberetti al Curry',
                'image' => 'images/gamberetti_curry.jpg',
                'description' => 'Gamberetti saltati con curry in polvere, latte di cocco e verdure.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Riso Fritto Cantonese',
                'image' => 'images/riso_fritto_cantonese.jpg',
                'description' => 'Riso fritto con uova, gamberetti, prosciutto e piselli.',
                'price' => '10.99',
                'aviability' => true,
            ],
        ];

        $restaurants = Restaurant::inRandomOrder()->get();

        foreach ($dishes as $dish) {

            $new_dish = new Dish();

            $restaurant = $restaurants->random();

            $new_dish->restaurant()->associate($restaurant);


            $new_dish->name = $dish['name'];
            $new_dish->image = $dish['image'];
            $new_dish->description = $dish['description'];
            $new_dish->price = $dish['price'];
            $new_dish->aviability = $dish['aviability'];

            //Salvo
            $new_dish->save();


        }
    }
}
