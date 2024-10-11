<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillFilesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bill_files')->delete();

         DB::table('bill_files')->insert([
             'billid' => 'BILL001',
             'billname' => 'Sample Bill',
             'year' => 2024,
             'session' => 'Spring',
             'status' => 'In Process',
             'sponsor' => 'John Doe',
             'created_at' => now(),
            'updated_at' => now(),
         ]);
    }
}
