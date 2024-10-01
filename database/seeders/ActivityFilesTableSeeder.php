<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityFilesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_files')->delete();
        
        
        
    }
}