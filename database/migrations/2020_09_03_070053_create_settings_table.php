<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // if (!Schema::hasTable('settings')) {
        Schema::create('settings', function (Blueprint $table) {
            $table->id('settings_id');
            $table->string('company_name');
            $table->string('Email');
            $table->string('mobile_number');
            $table->text('address');
            $table->string('agentcommission');
            $table->text('terms_conditions');
            $table->string('twitter');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('skype');
            $table->string('linkedin');
            $table->string('map_key');
            $table->string('map_ip1');
            $table->string('map_ip2');
            $table->string('copyright');

        });
        // }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('settings');
    }
}
