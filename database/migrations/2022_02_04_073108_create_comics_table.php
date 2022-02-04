<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Comic
 * 
 * id
 * comic_publisher_id -> foreign key to comic_publishers
 * title
 * description
 * file_url
 * status
 * cover_url
 * date_released
 * views
 * likes
 * shares
 * total_issues
 * 
 */

class CreateComicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            // add the rest
            $table->unsignedBigInteger('comic_publisher_id');
            $table->string('title');
            $table->string('description');
            $table->string('file_url');
            $table->string('status');
            $table->string('cover_url');
            $table->date('date_released');
            $table->integer('views')->default(0);
            $table->integer('likes')->default(0);
            $table->integer('shares')->default(0);
            $table->integer('total_issues')->default(0);
            $table->timestamps();

            $table->foreign('comic_publisher_id')->references('id')->on('comic_publishers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comics');
    }
}
