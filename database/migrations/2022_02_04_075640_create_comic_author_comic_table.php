<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 
 * Comic Author Comic
 * 
 * id
 * comic_author_id -> foreign key to comic_authors and also the primary key
 * comic_id -> foreign key to comics and also the primary key
 * role -> enum('writer', 'penciler', 'inker', 'colorist', 'letterer', 'cover artist', 'editor', 'artist')
 * 
 */
class CreateComicAuthorComicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comic_author_comic', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('comic_author_id');
            $table->unsignedBigInteger('comic_id');
            $table->enum('role', ['writer', 'penciler', 'inker', 'colorist', 'letterer', 'cover artist', 'editor', 'artist']);
            $table->timestamps();

            $table->foreign('comic_author_id')->references('id')->on('comic_authors');
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
        Schema::dropIfExists('comic_author_comic');
    }
}
