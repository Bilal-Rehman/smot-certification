<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\EmploymentRecord>
 */
class EmploymentRecordFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $applicant_id = Applicant::inRandomOrder()->value('id');
        return [
            'industry' => $this->faker->company(),
            'job_title' => $this->faker->jobTitle(),
            'applicant_id' => $applicant_id,
        ];
    }
}
