<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('items', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name_of_item');
            $table->unsignedInteger('targets_id');
            $table->foreign('targets_id')->references('id')->on('targets');
            $table->unsignedInteger('types_id');
            $table->foreign('types_id')->references('id')->on('types');
            $table->integer('price');
            $table->string('clothing_size');
            $table->integer('rating');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('items');
    }
}
