<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_detail', function (Blueprint $table) {
            $table->increments('id_product_detail');
            $table->integer('id_product_in_product_detail')->unsigned();
            $table->foreign('id_product_in_product_detail')->references('id_product')->on('products');
            $table->string('short_description_product_detail');
            $table->string('long_description_product_detail');
            $table->string('images_product_detail');
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
        Schema::dropIfExists('product_detail');
    }
}
