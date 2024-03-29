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
            [
                'name' => 'Insalata di Mare',
                'image' => 'images/insalata_di_mare.jpg',
                'description' => 'Un mix di frutti di mare, patate, olive, pomodorini, e prezzemolo, condito con olio e limone.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Cappuccino',
                'image' => 'images/cappuccino.jpg',
                'description' => 'Un classico caffè italiano con una spolverata di cacao in polvere sopra la schiuma di latte.',
                'price' => '3.99',
                'aviability' => true,
            ],
            [
                'name' => 'Baba al Rum',
                'image' => 'images/baba_al_rum.jpg',
                'description' => 'Dolce napoletano a base di pasta lievitata inzuppato nel rum e servito con panna montata.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Arancini',
                'image' => 'images/arancini.jpg',
                'description' => 'Palle di riso ripiene di ragù, piselli e mozzarella, impanate e fritte.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Tartufo Nero',
                'image' => 'images/tartufo_nero.jpg',
                'description' => 'Gelato al cioccolato con un cuore di cioccolato fondente, ricoperto di cacao amaro.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Cacciucco',
                'image' => 'images/cacciucco.jpg',
                'description' => 'Zuppa di pesce toscana con vari tipi di pesce e crostini di pane.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Crostini di Fegatini',
                'image' => 'images/crostini_di_fegatini.jpg',
                'description' => 'Fette di pane croccante condite con un paté di fegatini di pollo e aromi.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Zuppa di Lenticchie',
                'image' => 'images/zuppa_lenticchie.jpg',
                'description' => 'Una zuppa rustica fatta con lenticchie, pancetta, carote, sedano e cipolle.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Pane e Pomodoro',
                'image' => 'images/pane_pomodoro.jpg',
                'description' => 'Fette di pane toscano condite con pomodoro maturo, sale e olio d\'oliva.',
                'price' => '5.99',
                'aviability' => true,
            ],
            [
                'name' => 'Salmone alla Griglia',
                'image' => 'images/salmone_griglia.jpg',
                'description' => 'Filetto di salmone marinato con erbe aromatiche e grigliato, servito con limone.',
                'price' => '18.99',
                'aviability' => true,
            ],
            [
                'name' => 'Zabaione',
                'image' => 'images/zabaione.jpg',
                'description' => 'Dolce cremoso a base di tuorli d\'uovo, zucchero e vino Marsala, servito caldo o freddo.',
                'price' => '6.99',
                'aviability' => true,
            ],
            [
                'name' => 'Polpette al Sugo',
                'image' => 'images/polpette_sugo.jpg',
                'description' => 'Polpette di carne macinata servite in una salsa di pomodoro fatta in casa.',
                'price' => '12.99',
                'aviability' => true,
            ],
            [
                'name' => 'Ratatouille',
                'image' => 'images/ratatouille.jpg',
                'description' => 'Un piatto provenzale fatto con verdure come zucchine, melanzane, peperoni, e pomodori.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Mousse al Cioccolato',
                'image' => 'images/mousse_cioccolato.jpg',
                'description' => 'Una dolce e soffice mousse al cioccolato, servita con panna montata.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Burrata con Prosciutto Crudo',
                'image' => 'images/burrata_prosciutto_crudo.jpg',
                'description' => 'Burrata fresca servita con fette di prosciutto crudo e pomodorini.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Mojito',
                'image' => 'images/mojito.jpg',
                'description' => 'Un cocktail rinfrescante fatto con rum, menta, lime, zucchero e soda.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Limoncello',
                'image' => 'images/limoncello.jpg',
                'description' => 'Liquore italiano fatto con scorza di limone, zucchero, e alcol.',
                'price' => '6.99',
                'aviability' => true,
            ],
            [
                'name' => 'Chiacchiere',
                'image' => 'images/chiacchiere.jpg',
                'description' => 'Dolce croccante e friabile, tipico del Carnevale, ricoperto di zucchero a velo.',
                'price' => '4.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sorbetto al Limone',
                'image' => 'images/sorbetto_limone.jpg',
                'description' => 'Un dessert rinfrescante fatto con succo di limone e zucchero, servito in un guscio di limone.',
                'price' => '6.99',
                'aviability' => true,
            ],
            [
                'name' => 'Bruschetta con Funghi',
                'image' => 'images/bruschetta_funghi.jpg',
                'description' => 'Fette di pane tostato condite con funghi trifolati, aglio e prezzemolo.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Panna Cotta',
                'image' => 'images/panna_cotta.jpg',
                'description' => 'Un dolce al cucchiaio cremoso fatto con panna, zucchero e gelatina.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Manzo in Salsa di Ostriche',
                'image' => 'images/manzo_salsa_ostriche.jpg',
                'description' => 'Fettine di manzo saltate con verdure croccanti in una salsa aromatica di ostriche.',
                'price' => '18.99',
                'aviability' => true,
            ],
            [
                'name' => 'Gelato al Tè Verde',
                'image' => 'images/gelato_te_verde.jpg',
                'description' => 'Gelato cremoso al tè verde matcha, fatto in casa.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Pollo Kung Pao',
                'image' => 'images/pollo_kung_pao.jpg',
                'description' => 'Pezzetti di pollo saltati con arachidi, peperoncino Szechuan e verdure.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Rolls Primavera',
                'image' => 'images/rolls_primavera.jpg',
                'description' => 'Involtini di primavera croccanti ripieni di verdure e carne, serviti con salsa agrodolce.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Anatra Pekin',
                'image' => 'images/anatra_pekin.jpg',
                'description' => 'Anatra laquata con salsa hoisin, cipolline, cetrioli e pancake sottili.',
                'price' => '23.99',
                'aviability' => true,
            ],
            [
                'name' => 'Taco al Pastor',
                'image' => 'images/taco_al_pastor.jpg',
                'description' => 'Tortilla di mais farcita con carne di maiale marinata, ananas e cipolle.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Enchiladas',
                'image' => 'images/enchiladas.jpg',
                'description' => 'Tortillas di mais arrotolate e farcite con pollo, salsa di pomodoro e formaggio, cotte al forno.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Guacamole',
                'image' => 'images/guacamole.jpg',
                'description' => 'Una salsa a base di avocado schiacciato, pomodoro, cipolla, coriandolo e lime.',
                'price' => '6.99',
                'aviability' => true,
            ],
            [
                'name' => 'Quesadilla',
                'image' => 'images/quesadilla.jpg',
                'description' => 'Tortilla di mais ripiena di formaggio e altri ingredienti come carne, fagioli o verdure.',
                'price' => '8.99',
                'aviability' => true,
            ],
            [
                'name' => 'Burrito',
                'image' => 'images/burrito.jpg',
                'description' => 'Una grande tortilla di farina farcita con riso, fagioli, carne o verdure e salsa.',
                'price' => '10.99',
                'aviability' => true,
            ],
            [
                'name' => 'Chili con Carne',
                'image' => 'images/chili_con_carne.jpg',
                'description' => 'Una zuppa densa e piccante fatta con carne macinata, fagioli, pomodoro e peperoncino.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Tostadas',
                'image' => 'images/tostadas.jpg',
                'description' => 'Tortilla croccante farcita con carne, fagioli, lattuga, pomodoro, formaggio e salsa.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Fajitas',
                'image' => 'images/fajitas.jpg',
                'description' => 'Carne o pollo marinato saltato con peperoni, cipolle e condimenti, servito con tortillas e condimenti.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Tamale',
                'image' => 'images/tamale.jpg',
                'description' => 'Masa di mais avvolta in foglie di mais e ripiena di carne, salsa o altri ingredienti, cotta al vapore.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Mole Poblano',
                'image' => 'images/mole_poblano.jpg',
                'description' => 'Un piatto tradizionale messicano fatto con una salsa ricca e complessa di cioccolato, peperoncino e spezie.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sushi Burrito',
                'image' => 'images/sushi_burrito.jpg',
                'description' => 'Una combinazione di sushi e burrito, con riso, pesce crudo, verdure e salsa avvolta in un foglio di alga nori.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Taco Pizza',
                'image' => 'images/taco_pizza.jpg',
                'description' => 'Una pizza con base di tortilla croccante, salsa di pomodoro, carne macinata, formaggio, lattuga e pomodoro fresco.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sushi Pizza',
                'image' => 'images/sushi_pizza.jpg',
                'description' => 'Una pizza con base di riso sushi, ricoperta di pesce crudo, avocado, salsa piccante e maionese giapponese.',
                'price' => '15.99',
                'aviability' => true,
            ],
            [
                'name' => 'Ramen Burger',
                'image' => 'images/ramen_burger.jpg',
                'description' => 'Un hamburger con un panino fatto di ramen fritto, farcito con carne di manzo, lattuga e salsa barbecue.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Taco Sushi',
                'image' => 'images/taco_sushi.jpg',
                'description' => 'Una fusione di taco e sushi, con gusci di taco croccanti farciti di riso sushi, pesce crudo e guacamole.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sushi Tacos',
                'image' => 'images/sushi_tacos.jpg',
                'description' => 'Tortillas di mais croccanti farcite con riso sushi, tonno o salmone, avocado e salsa di soia.',
                'price' => '12.99',
                'aviability' => true,
            ],
            [
                'name' => 'Ravioli Nachos',
                'image' => 'images/ravioli_nachos.jpg',
                'description' => 'Ravioli fritti serviti con salsa di pomodoro, formaggio fuso, jalapenos e panna acida.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Kimchi Quesadilla',
                'image' => 'images/kimchi_quesadilla.jpg',
                'description' => 'Una quesadilla con formaggio fuso e kimchi coreano, servita con salsa piccante.',
                'price' => '10.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sushi Burrito Bowl',
                'image' => 'images/sushi_burrito_bowl.jpg',
                'description' => 'Un bowl con riso sushi, pesce crudo, avocado, cetrioli, carote, edamame e salsa teriyaki.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Banh Mi Tacos',
                'image' => 'images/banh_mi_tacos.jpg',
                'description' => 'Tacos con carne di maiale alla vietnamita, cetrioli, carote, jalapenos e maionese, serviti in una tortilla di mais.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sushi',
                'image' => 'images/sushi.jpg',
                'description' => 'Risotto di aceto di riso condito con pesce crudo, verdure o uova, avvolto in fogli di alga nori.',
                'price' => '16.99',
                'aviability' => true,
            ],
            [
                'name' => 'Ramen',
                'image' => 'images/ramen.jpg',
                'description' => 'Zuppa giapponese con noodle di frumento in brodo di carne o pesce, solitamente servita con carne, uova e verdure.',
                'price' => '14.99',
                'aviability' => true,
            ],
            [
                'name' => 'Tempura',
                'image' => 'images/tempura.jpg',
                'description' => 'Fritto giapponese consistente in verdure o frutti di mare ricoperti da una pastella leggera e croccante.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Teriyaki',
                'image' => 'images/teriyaki.jpg',
                'description' => 'Un piatto di carne o pesce marinato e cotto alla griglia o in padella con salsa teriyaki, servito con riso.',
                'price' => '15.99',
                'aviability' => true,
            ],
            [
                'name' => 'Gyoza',
                'image' => 'images/gyoza.jpg',
                'description' => 'Ravioli giapponesi ripieni di carne macinata e verdure, cotti al vapore o in padella e serviti con salsa di soia.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Okonomiyaki',
                'image' => 'images/okonomiyaki.jpg',
                'description' => 'Una specie di pancake giapponese fatto con una pastella a base di cavolo grattugiato, carne e altri ingredienti a scelta.',
                'price' => '12.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sashimi',
                'image' => 'images/sashimi.jpg',
                'description' => 'Pesce crudo affettato sottilmente e servito con salsa di soia e wasabi.',
                'price' => '18.99',
                'aviability' => true,
            ],
            [
                'name' => 'Yakitori',
                'image' => 'images/yakitori.jpg',
                'description' => 'Spiedini di pollo grigliati marinati in salsa teriyaki.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Chirashi',
                'image' => 'images/chirashi.jpg',
                'description' => 'Una ciotola di riso sushi coperta con una varietà di pesce crudo, uova di pesce, e verdure.',
                'price' => '17.99',
                'aviability' => true,
            ],
            [
                'name' => 'Udon',
                'image' => 'images/udon.jpg',
                'description' => 'Zuppa giapponese con noodle spessi fatti di farina di grano tenero, solitamente servita in brodo caldo con carne e verdure.',
                'price' => '13.99',
                'aviability' => true,
            ],
            [
                'name' => 'Takoyaki',
                'image' => 'images/takoyaki.jpg',
                'description' => 'Palle di pastella fritte contenenti pezzi di polpo, servite con salsa takoyaki, maionese giapponese e scaglie di bonito.',
                'price' => '11.99',
                'aviability' => true,
            ],
            [
                'name' => 'Miso Soup',
                'image' => 'images/miso_soup.jpg',
                'description' => 'Zuppa giapponese a base di pasta di miso, solitamente con tofu, alghe e cipollotti.',
                'price' => '9.99',
                'aviability' => true,
            ],
            [
                'name' => 'Katsu Curry',
                'image' => 'images/katsu_curry.jpg',
                'description' => 'Pollo, maiale o gamberetti impanati e fritti serviti con riso e una salsa curry giapponese.',
                'price' => '15.99',
                'aviability' => true,
            ],
            [
                'name' => 'Sukiyaki',
                'image' => 'images/sukiyaki.jpg',
                'description' => 'Una pentola calda giapponese contenente carne, tofu, verdure e noodles, cotti in una miscela dolce e salata di salsa di soia, mirin e zucchero.',
                'price' => '18.99',
                'aviability' => true,
            ],
            [
                'name' => 'Matcha Ice Cream',
                'image' => 'images/matcha_ice_cream.jpg',
                'description' => 'Gelato al tè verde matcha, un dolce popolare in Giappone.',
                'price' => '7.99',
                'aviability' => true,
            ],
            [
                'name' => 'Onigiri',
                'image' => 'images/onigiri.jpg',
                'description' => 'Palle di riso triangolari avvolte in alghe, spesso ripiene di ripieni come salmone, tonno, umeboshi o altri ingredienti.',
                'price' => '6.99',
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
