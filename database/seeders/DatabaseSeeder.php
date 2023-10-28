<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            // AdminSeeder::class,
            AdminSeeder::class,
            // TraineeSeeder::class,
            ApplicantSeeder::class,
            AcademicQualificationSeeder::class,
            EmploymentRecordSeeder::class,
            MachineTypeSeeder::class,
            TestTypeSeeder::class,
            QuestionSeeder::class,
            FinalResultSeeder::class,
            MachineResultSeeder::class,
            QuestionScoreSeeder::class,
        ]);
    }
}
