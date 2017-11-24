<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InitialValuesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('initial_values', function (Blueprint $table) {
            $table->increments('id');
            $table->double('lend_amount');
            $table->float('coin_gain');
            $table->float('stake_daily_bonus');
            $table->integer('coin_growth');
            $table->float('lending_base');
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
        Schema::dropIfExists('initial_values');
    }
}
