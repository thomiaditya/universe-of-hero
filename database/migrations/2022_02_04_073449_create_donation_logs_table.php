<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * Donation Log
 * 
 * id
 * user_id -> foreign key to users
 * payment_method_id -> foreign key to payment_methods
 * amount
 * payment_status -> enum('pending', 'paid', 'failed')
 * 
 */
class CreateDonationLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donation_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('payment_method_id');

            $table->integer('amount');
            $table->enum('payment_status', ['pending', 'paid', 'failed']);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('donation_logs');
    }
}
