<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('clerk_id');
            $table->string('name');
            $table->string('place_address');
            $table->integer('lunch_price');
            $table->integer('dinner_price');
            $table->integer('seat_num');
            $table->datetime('open');
            $table->datetime('close');
            $table->integer('average_stay_minute');
            $table->string('station');
            $table->integer('walk_minute');
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
        Schema::dropIfExists('shops');
    }
}
