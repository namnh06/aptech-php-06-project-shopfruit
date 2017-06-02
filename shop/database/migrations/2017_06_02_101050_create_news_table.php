<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id_news');
            $table->integer('id_user_in_news')->unsigned();
            $table->foreign('id_user_in_news')->references('id_user')->on('users');
            $table->string('title_vi_news');
            $table->string('title_en_news');
            $table->string('short_description_news');
            $table->string('content_news');
            $table->string('images_news');
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
        Schema::dropIfExists('news');
    }
}
