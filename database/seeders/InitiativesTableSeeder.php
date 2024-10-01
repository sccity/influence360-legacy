<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiatives')->delete();
        
        
        
    }
}