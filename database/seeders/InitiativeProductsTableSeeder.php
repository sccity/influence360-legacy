<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativeProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('initiative_products')->delete();
        
        
        
    }
}