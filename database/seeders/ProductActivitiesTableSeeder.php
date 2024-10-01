<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductActivitiesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_activities')->delete();
        
        
        
    }
}