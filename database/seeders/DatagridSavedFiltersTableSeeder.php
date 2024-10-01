<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatagridSavedFiltersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('datagrid_saved_filters')->delete();
        
        
        
    }
}