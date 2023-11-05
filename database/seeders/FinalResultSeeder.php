<?php

namespace Database\Seeders;

use App\Models\FinalResult;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FinalResultSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $applicantIds = \App\Models\Applicant::orderBy('id')->pluck('id')->toArray();
        foreach ($applicantIds as $applicantId) {
            FinalResult::create([
                "applicant_id" => $applicantId,
            ]);
        }
    }
}
