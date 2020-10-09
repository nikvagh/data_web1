<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomerTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('customer')) {
            Schema::create('customer', function (Blueprint $table) {
                $table->id();
                $table->integer('customer_id');
                $table->integer('agent_id')->nullable();
                $table->string('address');
                $table->string('abn');
                $table->string('name');
                $table->string('profile_pic')->nullable();
                $table->timestamps();
                  $table->double('wallet', 20, 2);

                $table->foreign('customer_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');


                $table->foreign('agent_id')
                ->references('agent_id')
                ->on('agent')
                ->onDelete('cascade');



            });

            // $table->foreign('customer_id')->references('id')->on('users');
            // $table->foreign('agent_id')->references('agent_id')->on('agent');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_tabel');
    }
}
