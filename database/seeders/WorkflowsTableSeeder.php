<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class WorkflowsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('workflows')->delete();
        
        \DB::table('workflows')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Emails to participants after activity creation',
                'description' => 'Emails to participants after activity creation',
                'entity_type' => 'activities',
                'event' => 'activity.create.after',
                'condition_type' => 'and',
                'conditions' => '[{"value": ["call", "meeting", "lunch"], "operator": "{}", "attribute": "type", "attribute_type": "multiselect"}]',
                'actions' => '[{"id": "send_email_to_participants", "value": "1"}]',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:36:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Emails to participants after activity updation',
                'description' => 'Emails to participants after activity updation',
                'entity_type' => 'activities',
                'event' => 'activity.update.after',
                'condition_type' => 'and',
                'conditions' => '[{"value": ["call", "meeting", "lunch"], "operator": "{}", "attribute": "type", "attribute_type": "multiselect"}]',
                'actions' => '[{"id": "send_email_to_participants", "value": "2"}]',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:36:21',
            ),
        ));
        
        
    }
}