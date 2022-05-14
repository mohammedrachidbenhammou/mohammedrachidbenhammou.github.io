<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->string('name');
			$table->string('summary');
			$table->string('description');

			$table->bigInteger('id_city')->unsigned();
			$table->bigInteger('id_cat')->unsigned();
			$table->bigInteger('id_meta')->unsigned();
			$table->bigInteger('id_analytics')->unsigned();

			$table->foreign('id_city')->references('id')->on('city');
			$table->foreign('id_cat')->references('id')->on('category');
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
        Schema::dropIfExists('posts');
    }
}
