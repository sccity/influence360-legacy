<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeadSourcesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lead_sources')->delete();
        
        \DB::table('lead_sources')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Self',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:53:36',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Staff',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:53:19',
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'Mayor & Council',
                'created_at' => '2024-10-01 08:53:43',
                'updated_at' => '2024-10-01 08:53:43',
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'Other',
                'created_at' => '2024-10-01 08:53:51',
                'updated_at' => '2024-10-01 08:53:51',
            ),
        ));
        
        
    }
}