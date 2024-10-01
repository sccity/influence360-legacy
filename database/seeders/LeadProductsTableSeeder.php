<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class LeadProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('lead_products')->delete();
        
        
        
    }
}