<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $job_orders = [
            [
                'name'                  => 'Job Task',
                'date'                  => date("Y-m-d"),
                'jos_date'              => date('Y-m-d'),
                'type_of_work_id'       => 1,
                'contractor_id'         => 1,
                'conductor_id'          => 1,
                'actual_work_completed' => 120.50,
                'remarks'               => 'Demo',
                'reference_number'      => 'JOB-001',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ],

            [
                'name'                  => 'Polo Task',
                'date'                  => date("Y-m-d"),
                'jos_date'              => date('Y-m-d'),
                'type_of_work_id'       => 1,
                'contractor_id'         => 1,
                'conductor_id'          => 1,
                'actual_work_completed' => 120.50,
                'remarks'               => 'Demo',
                'reference_number'      => 'JOB-002',
                'created_at'            => date('Y-m-d H:i:s'),
                'updated_at'            => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('job_orders')->insert($job_orders);
    }
}
