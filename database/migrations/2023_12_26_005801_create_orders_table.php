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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
        });

        Schema::create('order_details', function (Blueprint $table) {
            $table->id();
            $table->integer('id_order');
            $table->integer('id_user');
            $table->integer('id_product');
            $table->integer('recipient_name');
            $table->integer('recipient_phone');
            $table->integer('recipient_email');
            $table->integer('address');
            $table->integer('province');
            $table->integer('subdistrict');
            $table->integer('shipping_cost');
            $table->integer('quantity');
            $table->integer('total')->default(0);
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
