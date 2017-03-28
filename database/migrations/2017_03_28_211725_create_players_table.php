<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('players', function(Blueprint $table) {
        $table->string('first') - default();
        $table->string('last') - default('');
        $table->integer('gamesPlayed') - default(0);
        $table->integer('avgMinutes') - default(0);
        $table->integer('ppg');
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
        //
    }
}
