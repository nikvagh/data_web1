<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Carddetails extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carddetails', function (Blueprint $table) {
            $table->id('id');
            $table->string('card_number');
            $table->string('expiry_month');
            $table->year('expiry_year');
            $table->string('cvv');
            $table->string('card_name');

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
        Schema::dropIfExists('carddetails');
    }
}
