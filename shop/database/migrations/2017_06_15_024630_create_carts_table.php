<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->increments('id_cart');
            $table->integer('id_bill_in_cart')->unsigned();
            $table->foreign('id_bill_in_cart')->references('id_bill')->on('bills');
            $table->integer('id_product_in_cart')->unsigned();
            $table->foreign('id_product_in_cart')->references('id_product')->on('products');
            $table->double('price_product_in_cart');
            $table->integer('quantity_product_in_cart');

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
        Schema::dropIfExists('carts');
    }
}
