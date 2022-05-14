<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFrontprefsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frontprefs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('logo_uri')->nullable();
            $table->string('app_link')->nullable();
            $table->string('adress')->nullable();
            $table->string('phone')->nullable();
            $table->string('emil')->nullable();
            $table->boolean('caroussel_show')->nullable();
            $table->json('slide_1')->nullable();
            $table->json('slide_2')->nullable();
            $table->json('slide_3')->nullable();
            }
        );
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('frontprefs');
    }
}
