<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeOfWorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $works = [
            [
             'name' => 'Painting',
            'rate' => 10.00,
            'code' => 'PNT001'
           ],
            [
            
                'name' => 'Welding',
                'rate' => 12.50,
                'code' => 'WLD001'
            ]
        ];
        DB::table('type_of_works')->insert($works);
    }
}
