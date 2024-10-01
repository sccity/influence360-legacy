<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativeTypesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('initiative_types')->delete();

        \DB::table('initiative_types')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'State Legislative',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'Federal Legislative',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'Local/County Legislative',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'Regulatory',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'Policy Research',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'Stakeholder Engagement',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'Event',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'Issue Monitoring',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'Other',
                'created_at' => '2024-10-01 00:00:00',
                'updated_at' => '2024-10-01 00:00:00',
            ),
        ));


    }
}
