<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeadStagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lead_stages')->delete();
        
        
        
    }
}