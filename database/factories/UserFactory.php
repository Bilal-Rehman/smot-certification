<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $gender = ['male', 'female', 'other'];
        // return [
        //     'name' => fake()->name(),
        //     'email' => fake()->unique()->safeEmail(),
        //     'email_verified_at' => now(),
        //     'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        //     'remember_token' => Str::random(10),

        //     'father_name' => $this->faker->name(),
        //     'date_of_birth' => $this->faker->date(),
        //     'cnic' => $this->faker->numberBetween(10000, 99999) . "-" . $this->faker->numberBetween(1000000, 9999999) . "-" . $this->faker->numberBetween(0, 9),
        //     'domicile' => $this->faker->paragraph(1),
        //     'gender' => $gender[rand(0, 1)],
        //     'cell_no' => $this->faker->numberBetween(0000, 9999) . '' . $this->faker->numberBetween(0000000, 9999999),
        //     'residential_address' => $this->faker->address(),
        //     'permanent_address' => $this->faker->address(),
        // ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
