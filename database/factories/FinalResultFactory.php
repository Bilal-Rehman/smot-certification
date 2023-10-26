<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\FinalResult>
 */
class FinalResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $applicantId = Applicant::inRandomOrder()->value('id');
        return [
            'applicant_id' => $applicantId,
        ];
    }
}
