<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'FullName' => fake()->name(),
        'JobTitle' => fake()->jobTitle(),
        'Department' => fake()->randomElement(['IT', 'HR', 'Manager', 'Business']),
        'Gender' => fake()->randomElement(['male', 'female']),
        'Salary' => fake()->randomNumber(5,true)
        ];
    }
}
