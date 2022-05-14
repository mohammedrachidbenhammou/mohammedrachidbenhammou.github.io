<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class PrefsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('frontprefs')->insert([
            'id' => '0',
            "created_at"=>"2000-01-01 01:01:01",
            "updated_at"=>"2000-01-01 01:01:01",
            
            ]

        );


            
        //
    }
}
