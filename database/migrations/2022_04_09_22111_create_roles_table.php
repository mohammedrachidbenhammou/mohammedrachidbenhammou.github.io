<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roles', function (Blueprint $table) {
           $table->id();
			$table->string('role_name');
			$table->boolean('manage_users');
			$table->boolean('add_city');
			$table->boolean('add_posts');
			$table->boolean('edit_posts');
			$table->boolean('delete_posts');
			$table->boolean('add_category');
			$table->boolean('delete_category');		
        });
		DB::table('roles')->insert(
		  array(
		  [
           'id' => '0',
		   'role_name' => 'superadmin',
           'manage_users' => true,
           'add_city' => true,
		   'add_posts' => true,
           'edit_posts' => true,
           'delete_posts' => true,
           'add_category' => true,
           'delete_category' => true,
		  ],
		  [
           'id' => '999',
		   'role_name' => 'registred',
           'manage_users' => false,
           'add_city' => false,
           'add_posts' => false,
           'edit_posts' => false,
           'delete_posts' => false,
           'add_category' => false,
           'delete_category' => false,
		  ],	  
		  )
		);
		
		
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roles');
    }
}
