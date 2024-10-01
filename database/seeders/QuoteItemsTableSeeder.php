<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class QuoteItemsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('quote_items')->delete();
        
        
        
    }
}