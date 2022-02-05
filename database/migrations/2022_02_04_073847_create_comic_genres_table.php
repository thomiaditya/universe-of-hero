<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 
 * Comic Genre
 * 
 * id
 * genre_id -> foreign key to genres and also the primary key
 * comic_id -> foreign key to comics and also the primary key
 * 
 */
class CreateComicGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_genres', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('comic_id');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('genre_id')->references('id')->on('genres');
            $table->foreign('comic_id')->references('id')->on('comics');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comic_genres');
    }
}
