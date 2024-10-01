<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('person_activities')->delete();
        
        
        
    }
}