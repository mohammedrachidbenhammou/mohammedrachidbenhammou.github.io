<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRestaurantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('phone')->nullable();
			$table->bigInteger('id_meta')->unsigned()->nullable();
			$table->bigInteger('id_analytics')->unsigned()->nullable();  
            $table->bigInteger('id_city')->unsigned();

			$table->foreign('id_city')->references('id')->on('cities');      
            $table->foreign('id_meta')->references('id')->on('metadata');
			$table->foreign('id_analytics')->references('id')->on('analytics');
                
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
        Schema::dropIfExists('restaurants');
    }
}
