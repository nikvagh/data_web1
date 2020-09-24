<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        if (!Schema::hasTable('transactions')) {
            Schema::create('transactions', function (Blueprint $table) {
                $table->id('transactions_id');
                $table->integer('customer_id');
                $table->integer('agent_id');
                $table->double('amount', 20, 2);
                $table->enum('type', ['d', 'w']);
                $table->enum('deposittype',['1', '2','3','4','5']);
                $table->string('agentcommission');
                $table->string('commission');

                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transactions');
    }
}
