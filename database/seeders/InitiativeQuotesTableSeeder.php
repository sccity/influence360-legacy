<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativeQuotesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiative_quotes')->delete();
        
        
        
    }
}