<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class EmailTemplatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('email_templates')->delete();
        
        \DB::table('email_templates')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Activity created',
                'subject' => 'Activity created: {%activities.title%}',
                'content' => '<p style="font-size: 16px; color: #5e5e5e;">You have a new activity, please find the details bellow:</p>
<p><strong style="font-size: 16px;">Details</strong></p>
<table style="height: 97px; width: 952px;">
<tbody>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px;">Title</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.title%}</td>
</tr>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px;">Type</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.type%}</td>
</tr>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px;">Date</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.schedule_from%} to&nbsp;{%activities.schedule_to%}</td>
</tr>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px; vertical-align: text-top;">Participants</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.participants%}</td>
</tr>
</tbody>
</table>',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:36:21',
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'Activity modified',
                'subject' => 'Activity modified: {%activities.title%}',
                'content' => '<p style="font-size: 16px; color: #5e5e5e;">You have a new activity modified, please find the details bellow:</p>
<p><strong style="font-size: 16px;">Details</strong></p>
<table style="height: 97px; width: 952px;">
<tbody>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px;">Title</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.title%}</td>
</tr>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px;">Type</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.type%}</td>
</tr>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px;">Date</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.schedule_from%} to&nbsp;{%activities.schedule_to%}</td>
</tr>
<tr>
<td style="width: 116.953px; color: #546e7a; font-size: 16px; vertical-align: text-top;">Participants</td>
<td style="width: 770.047px; font-size: 16px;">{%activities.participants%}</td>
</tr>
</tbody>
</table>',
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:36:21',
            ),
        ));
        
        
    }
}