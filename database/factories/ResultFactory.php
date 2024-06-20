<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\=Result>
 */
class ResultFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'home_team' => $this->faker->word(),
            'away_team' => $this->faker->word(),
            'date' => $this->faker->date(),
            'location' => $this->faker->word(),
            'results' => $this->faker->numberBetween(1 - 2, 4 - 5)
        ];
    }
}
