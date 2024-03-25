<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name', 64)->required();
            $table->string('customer_lastName', 64)->required();
            $table->string('customer_adress', 256)->required();
            $table->string('customer_mail_adress', 256)->required();
            $table->string('customer_phone_number', 12)->required();
            // $table->dateTime('order_date')->required();
            // $table->decimal('total_amount')->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
