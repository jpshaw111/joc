<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConductorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $conductors = [
            [
                'first_name'        => 'Rajesh',
                'middle_name'       => '',
                'last_name'         => 'Kumar',
                'staff_id'          => 'STF0001',
                'email'             => 'rajesh@gmail.com',
                'phone_number'      => '7874857895',
                'department_name'   => 'Electrical',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ],
            [
                'first_name'        => 'Amit',
                'middle_name'       => 'Kumar',
                'last_name'         => 'Verma',
                'staff_id'          => 'STF0002',
                'email'             => 'akv@gmail.com',
                'phone_number'      => '8874857895',
                'department_name'   => 'Mechanical',
                'created_at'        => date('Y-m-d H:i:s'),
                'updated_at'        => date('Y-m-d H:i:s')
            ]
        ];
        DB::table('conductors')->insert($conductors);
    }
}
