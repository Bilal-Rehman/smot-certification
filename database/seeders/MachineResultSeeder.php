<?php

namespace Database\Seeders;

use App\Models\MachineResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class MachineResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $resultIds = \App\Models\FinalResult::orderBy('id')->pluck('id')->toArray();
        $machineIds = \APP\Models\MachineType::orderBy('id')->pluck('id')->toArray();

        foreach ($resultIds as $resultId) {
            foreach ($machineIds as $machineId) {
                MachineResult::create([
                    'machine_type_id' => $machineId,
                    'grade' => $faker->numberBetween(1, 5),
                    'remarks' => $faker->numberBetween(0, 1) ? $faker->paragraph(1) : '',
                    'final_result_id' => $resultId,
                ]);
            }
        }
    }
}
