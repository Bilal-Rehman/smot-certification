<?php

namespace Database\Factories;

use App\Models\Applicant;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AcademicQualification>
 */
class AcademicQualificationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $applicant_id = Applicant::inRandomOrder()->value('applicant_id');
        return [
            'degree_name' => $this->faker->name(),
            'passign_year' => $this->faker->numberBetween(2000, 2022),
            'marks' => $this->faker->randomFloat(2, 0, 1100),
            'applicant_id' => $applicant_id,
        ];
    }
}
