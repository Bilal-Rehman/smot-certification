<?php

namespace Database\Seeders;

use App\Models\EmploymentRecord;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EmploymentRecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        EmploymentRecord::factory(5)->create();
    }
}
