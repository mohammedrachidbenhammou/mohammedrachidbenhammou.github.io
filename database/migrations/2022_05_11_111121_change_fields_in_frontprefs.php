<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class ChangeFieldsInFrontprefs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frontprefs', function (Blueprint $table) {
            $table->string('slide_1')->nullable()->change();
            $table->string('slide_2')->nullable()->change();
            $table->string('slide_3')->nullable()->change();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('frontprefs', function (Blueprint $table) {
            //
        });
    }
}
