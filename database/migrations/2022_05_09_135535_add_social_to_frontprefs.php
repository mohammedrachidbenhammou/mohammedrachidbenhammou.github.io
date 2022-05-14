<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSocialToFrontprefs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('frontprefs', function (Blueprint $table) {
			$table->string('fb_link')->nullable();
			$table->string('twit_link')->nullable();
			$table->string('insta_link')->nullable();
            //
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
