<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiative_types')->delete();
        
        \DB::table('initiative_types')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'New Issue',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:57:46',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Existing Issue',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:57:51',
            ),
        ));
        
        
    }
}