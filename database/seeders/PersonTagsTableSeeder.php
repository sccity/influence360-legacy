<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PersonTagsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('person_tags')->delete();
        
        
        
    }
}