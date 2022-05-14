<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->integer('stars')->nullable();
            $table->string('phone')->nullable();
            $table->json('room_type')->nullable();

			$table->bigInteger('id_meta')->unsigned()->nullable();
			$table->bigInteger('id_analytics')->unsigned()->nullable();        
            $table->bigInteger('id_city')->unsigned();
            
			$table->foreign('id_city')->references('id')->on('cities');
            $table->foreign('id_meta')->references('id')->on('metadata');
			$table->foreign('id_analytics')->references('id')->on('analytics');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
