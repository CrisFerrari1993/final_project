<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Foreign key from Restaurant to user 1-1
        Schema::table('restaurants', function (Blueprint $table) {

            $table->foreignId('user_id')->constrained();

        });
        // Foreign Key from dishes to restaurant 1-1
        Schema::table('dishes', function (Blueprint $table) {

            $table->foreignId('restaurant_id')->constrained();

        });
        // Foreign Key from orders to restaurant 1-1
        Schema::table('orders', function (Blueprint $table) {

            $table->foreignId('restaurant_id')->constrained();

        });
        // Foreign Key pivot table N-N
        Schema::table('category_restaurant', function (Blueprint $table) {

            $table->foreignId('category_id')->constrained();
            $table->foreignId('restaurant_id')->constrained();

        });
        // Foreign Key pivot table N-N
        Schema::table('dish_order', function (Blueprint $table) {

            $table->foreignId('dish_id')->constrained();
            $table->foreignId('order_id')->constrained();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Drop Foreign and column 
        Schema::table('restaurants', function (Blueprint $table) {

            $table->dropForeign('restaurants_user_id_foreign');
            $table->dropColumn('user_id');
            
        });
        // Drop Foreign and column 
        Schema::table('dishes', function (Blueprint $table) {

            $table->dropForeign('dishes_restaurant_id_foreign');
            $table->dropColumn('restaurant_id');

        });
        // Drop Foreign and column 
        Schema::table('orders', function (Blueprint $table) {

            $table->dropForeign('orders_restaurant_id_foreign');
            $table->dropColumn('restaurant_id');

        });
        // Drop Foreign and column 
        Schema::table('category_restaurant', function (Blueprint $table) {

            $table->dropForeign('category_restaurant_category_id_foreign');
            $table->dropColumn('category_id');

            $table->dropForeign('category_restaurant_restaurant_id_foreign');
            $table->dropColumn('restaurant_id');

        });
        // Drop Foreign and column 
        Schema::table('dish_order', function (Blueprint $table) {

            $table->dropForeign('dish_order_dish_id_foreign');
            $table->dropColumn('dish_id');

            $table->dropForeign('dish_order_order_id_foreign');
            $table->dropColumn('order_id');

        });
    }
};
