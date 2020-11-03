<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentCommissionRulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agent_commission_rules', function (Blueprint $table) {
            $table->id();
            $table->double('to', 20, 2);
            $table->double('from', 20, 2);
           $table->enum('earning_type', ['percent', 'fixed_runt']);
            $table->string('earning');

            
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
        Schema::dropIfExists('agent_commission_rules');
    }
}
