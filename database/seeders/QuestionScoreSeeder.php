<?php

namespace Database\Seeders;

use App\Models\QuestionScore;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class QuestionScoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $machineResultIds = \App\Models\MachineResult::orderBy('id')->pluck('id')->toArray();
        $testTypeIds = \App\Models\TestType::orderBy('id')->pluck('id')->toArray();
        $questionIds = \App\Models\Question::orderBy('id')->pluck('id')->toArray();
        // dd($questionIds);

        foreach ($machineResultIds as $machineResultId) {
            foreach ($testTypeIds as $testTypeId) {
                foreach ($questionIds as $questionId) {
                    QuestionScore::create([
                        'machine_result_id' => $machineResultId,
                        'test_type_id' => $testTypeId,
                        'question_id' => $questionId,
                        'score' => $faker->numberBetween(1, 4),
                    ]);
                }
            }
        }
    }
}
