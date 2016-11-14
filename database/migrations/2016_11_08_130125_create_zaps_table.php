<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zaps', function (Blueprint $table) {
            $table->increments('id');
            $table->text('name');
            $table->integer('weight');
            $table->text('monufacturer');
            $table->integer('cost');
            $table->text('group');
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
        Schema::drop('zaps');
    }
}
