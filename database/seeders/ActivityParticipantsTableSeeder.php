<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ActivityParticipantsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('activity_participants')->delete();
        
        
        
    }
}