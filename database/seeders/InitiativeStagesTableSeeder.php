<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativeStagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiative_stages')->delete();
        
        
        
    }
}