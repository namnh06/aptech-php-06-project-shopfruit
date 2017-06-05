<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id_product');
            $table->integer('id_category_in_product')->unsigned();
            $table->foreign('id_category_in_product')->references('id_category')->on('category');
            $table->string('name_vi_product');
            $table->string('name_en_product');
            $table->double('price_product');
            $table->integer('percent_discount_product');
            $table->string('code_product');
            $table->string('status_product');
            $table->integer('quantity_product');
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
        Schema::dropIfExists('products');
    }
}
