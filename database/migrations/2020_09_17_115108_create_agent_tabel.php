<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgentTabel extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('agent')) {
            Schema::create('agent', function (Blueprint $table) {
                $table->id();
                $table->integer('agent_id');
                $table->string('business_name');
                $table->string('abn');
                $table->string('type_of_industry');
                $table->double('commission', 20, 2);
                
                $table->text('profile_pic');
                $table->text('address');
                $table->enum('membership_status',['enable', 'disable']);
                $table->date('membership_end');
                $table->double('wallet', 20, 2);
                $table->timestamps();
                $table->foreign('agent_id')
                ->references('id')
                ->on('users');
            });
            // $table->foreign('agent_id')->references('id')->on('users');
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agent_tabel');
    }
}
