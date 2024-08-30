<?php

namespace Database\Factories;

use App\Models\Fixture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Fixture>
 */
class FixtureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Fixture::class;
    public function definition(): array
    {
        return [
            'home_team_id' => $this->faker->numberBetween(1, 10),
            'away_team_id' => $this->faker->numberBetween(1, 10),
            'name' => $this->faker->name,
            'location' => $this->faker->address,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'type' => $this->faker->randomElement(['league', 'tournament', 'friendly']),
            'home_team_score' => $this->faker->numberBetween(0, 10),
            'away_team_score' => $this->faker->numberBetween(0, 10),
        ];
    }
}
