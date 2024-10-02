<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BillFile;

class BillFilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BillFile::factory()->count(100)->create();
    }
}
