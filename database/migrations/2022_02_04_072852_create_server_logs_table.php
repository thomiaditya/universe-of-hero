<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * 
 * Server Log
 * 
 * id
 * log_type -> enum('error', 'warning', 'info', 'debug')
 * message
 * 
 */
class CreateServerLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('server_logs', function (Blueprint $table) {
            $table->id();
            $table->enum('log_type', ['error', 'warning', 'info', 'debug']);
            $table->string('message');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('server_logs');
    }
}
