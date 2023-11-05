<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $testIds = \App\Models\TestType::orderBy('id')->pluck('id')->toArray();
        foreach ($testIds as $testId) {
            for ($i = 0; $i < 5; $i++) {
                Question::create([
                    'description' => $faker->paragraph(1),
                    'test_type_id' => $testId,
                ]);
            }
        }
    }
}
