<?php

namespace Database\Factories;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => $this->faker->numberBetween(20000, 100000),
            'location' => $this->faker->address(),
            'schedule' => "Full Time",
            'url' => $this->faker->url(),
            'featured' => false,
            'employer_id' => Employer::factory()
        ];
    }
}
