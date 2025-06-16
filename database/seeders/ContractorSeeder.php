<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContractorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $contractors = [
            [
                "name"          => 'A k Builders',
                "code"          => 'CNT0001',
                "email"         => 'akbuilders@gmail.com',
                "phone_number"  => '7874587898',
                "company_name"  => 'AK Builders',
                "balance"       => 5000.00,
                "created_at"    => date("Y-m-d H:i:s"),
                "updated_at"    => date("Y-m-d H:i:s")
            ],
            [
                "name"          => 'Mitra',
                "code"          => 'CNT002',
                "email"         => 'mintra@gamil.com',
                "phone_number"  => '8748587478',
                "company_name"  => 'Mitra Company',
                "balance"       => 12000.00,
                "created_at"    => date("Y-m-d H:i:s"),
                "updated_at"    => date("Y-m-d H:i:s")
            ]
        ];
        DB::table('contractors')->insert($contractors);
    }
}
