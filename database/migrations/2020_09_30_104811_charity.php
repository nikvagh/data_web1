<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Charity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Charity', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->string('CEO_details');
            $table->text('address');
            $table->string('business_registration');
            $table->string('Member_names');
            $table->string('need_funding');
           $table->enum('background_check', ['yes', 'no']);

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
        Schema::dropIfExists('Charity');
    }
}
