<?php

namespace Database\Seeders;

use App\Models\MachineType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        MachineType::create([
            "machine_name" => "Lock Stitch"
        ]);
        MachineType::create([
            "machine_name" => "Overlock"
        ]);
        MachineType::create([
            "machine_name" => "Flat Lock"
        ]);
    }
}
