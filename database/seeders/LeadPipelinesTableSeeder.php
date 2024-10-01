<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeadPipelinesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lead_pipelines')->delete();
        
        \DB::table('lead_pipelines')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Default Pipeline',
                'is_default' => 1,
                'rotten_days' => 30,
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:36:21',
            ),
        ));
        
        
    }
}