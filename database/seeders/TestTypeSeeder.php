<?php

namespace Database\Seeders;

use App\Models\TestType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testNames = ["Stiching Management", "Quality Management", "Basic Knowledge"];
        $test_type_ids = \App\Models\MachineType::orderBy('id')->pluck('id')->toArray();
        foreach ($test_type_ids as $test_type_id) {
            foreach ($testNames as $testName) {
                TestType::create([
                    "test_type_name" => $testName,
                    "machine_type_id" => $test_type_id,
                ]);
            }
        }
    }
}
