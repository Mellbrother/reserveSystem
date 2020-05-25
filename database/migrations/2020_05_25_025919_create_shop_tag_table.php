<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateShopTagTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shop_tag', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('shop_id');
            $table->integer('tag_id');
            $table->timestamps();

            $table->unique(['shop_id', 'tag_id']);
            $table->foreign('shop_id')
                ->references('id')
                ->on('shops')
                ->onDelete('cascade');

            $table->foreign('tag_id')
                ->references('id')
                ->on('tags')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('shop_tag');
    }
}
