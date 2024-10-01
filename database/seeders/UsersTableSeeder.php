<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Santa Clara City',
                'email' => 'admin@santaclarautah.gov',
                'password' => '$2y$10$l3aTCDO7tvA51NPp1lpeC.md/g/WCRE7DoGmb0FqU40Y3kSe/becm',
                'status' => 1,
                'view_permission' => 'global',
                'role_id' => 1,
                'remember_token' => NULL,
                'created_at' => '2024-10-01 08:36:21',
                'updated_at' => '2024-10-01 08:44:23',
                'image' => NULL,
            ),
        ));
        
        
    }
}