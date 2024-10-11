<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillFilesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('bill_files')->delete();

        $billFiles = [
            [
                'billid' => 'BILL001',
                'billname' => 'Sample Bill',
                'year' => 2024,
                'session' => 'Spring',
                'status' => 'In Process',
                'sponsor' => 'John Doe',
            ],
            [
                'billid' => 'BILL002',
                'billname' => 'Environmental Protection Act',
                'year' => 2024,
                'session' => 'Fall',
                'status' => 'Abandoned',
                'sponsor' => 'Jane Smith',
            ],
            [
                'billid' => 'BILL003',
                'billname' => 'Education Reform Bill',
                'year' => 2025,
                'session' => 'Winter',
                'status' => 'In Process',
                'sponsor' => 'Mike Johnson',
            ],
            [
                'billid' => 'BILL004',
                'billname' => 'Healthcare Improvement Act',
                'year' => 2025,
                'session' => 'Spring',
                'status' => 'Abandoned',
                'sponsor' => 'Sarah Brown',
            ],
            [
                'billid' => 'BILL005',
                'billname' => 'Tax Reform Bill',
                'year' => 2025,
                'session' => 'Summer',
                'status' => 'In Process',
                'sponsor' => 'Tom Wilson',
            ],
            [
                'billid' => 'BILL006',
                'billname' => 'Infrastructure Development Act',
                'year' => 2026,
                'session' => 'Fall',
                'status' => 'In Process',
                'sponsor' => 'Emily Davis',
            ],
            [
                'billid' => 'BILL007',
                'billname' => 'Cybersecurity Enhancement Bill',
                'year' => 2026,
                'session' => 'Winter',
                'status' => 'Abandoned',
                'sponsor' => 'Alex Lee',
            ],
            [
                'billid' => 'BILL008',
                'billname' => 'Renewable Energy Act',
                'year' => 2026,
                'session' => 'Spring',
                'status' => 'In Process',
                'sponsor' => 'Chris Taylor',
            ],
            [
                'billid' => 'BILL009',
                'billname' => 'Small Business Support Bill',
                'year' => 2027,
                'session' => 'Summer',
                'status' => 'Abandoned',
                'sponsor' => 'Rachel Green',
            ],
            [
                'billid' => 'BILL010',
                'billname' => 'Public Transportation Improvement Act',
                'year' => 2027,
                'session' => 'Fall',
                'status' => 'In Process',
                'sponsor' => 'David Clark',
            ],
        ];

        foreach ($billFiles as $billFile) {
            DB::table('bill_files')->insert(array_merge($billFile, [
                'created_at' => now(),
                'updated_at' => now(),
            ]));
        }
    }
}
