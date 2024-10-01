<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class InitiativePipelineStagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('initiative_pipeline_stages')->delete();

        \DB::table('initiative_pipeline_stages')->insert(array (
            0 =>
            array (
                'id' => 2,
                'code' => 'issue-identification',
                'name' => 'Issue Identification',
                'probability' => 100,
                'sort_order' => 1,
                'initiative_pipeline_id' => 1,
            ),
            1 =>
            array (
                'id' => 3,
                'code' => 'research-analysis',
                'name' => 'Research & Analysis',
                'probability' => 100,
                'sort_order' => 2,
                'initiative_pipeline_id' => 1,
            ),
            2 =>
            array (
                'id' => 4,
                'code' => 'strategy-development',
                'name' => 'Strategy Development',
                'probability' => 100,
                'sort_order' => 3,
                'initiative_pipeline_id' => 1,
            ),
            3 =>
            array (
                'id' => 7,
                'code' => 'advocacy',
                'name' => 'Advocacy',
                'probability' => 100,
                'sort_order' => 4,
                'initiative_pipeline_id' => 1,
            ),
            4 =>
            array (
                'id' => 8,
                'code' => 'legislative-monitoring',
                'name' => 'Legislative Monitoring',
                'probability' => 100,
                'sort_order' => 5,
                'initiative_pipeline_id' => 1,
            ),
            5 =>
            array (
                'id' => 5,
                'code' => 'complete',
                'name' => 'Complete',
                'probability' => 100,
                'sort_order' => 6,
                'initiative_pipeline_id' => 1,
            ),
        ));


    }
}
