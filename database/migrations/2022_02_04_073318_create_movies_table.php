<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 
 * Movie
 * 
 * id
 * director_id -> foreign key to directors
 * movie_producer_id -> foreign key to movie_producers
 * title
 * year
 * description
 * movie_url
 * imdb_url
 * views
 * likes
 * shares
 * 
 */
class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            // add the rest of the columns here
            $table->unsignedBigInteger('director_id');
            $table->unsignedBigInteger('movie_producer_id');

            $table->string('title');
            $table->integer('year');
            $table->string('description');
            $table->string('movie_url');
            $table->string('imdb_url');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('shares')->default(0);
            $table->timestamps();

            $table->foreign('director_id')->references('id')->on('directors');
            $table->foreign('movie_producer_id')->references('id')->on('movie_producers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
