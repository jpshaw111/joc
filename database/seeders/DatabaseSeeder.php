<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
    

        $this->call(TypeOfWorkSeeder::class);
        $this->call(ContractorSeeder::class);
        $this->call(ConductorSeeder::class);
        $this->call(JobOrderSeeder::class);
    }
}
