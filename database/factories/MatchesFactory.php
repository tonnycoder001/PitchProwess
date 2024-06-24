<?php

namespace Database\Factories;

use App\Models\Matches;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Matches>
 */
class MatchesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Matches::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'home_team' => $this->faker->name(),
            'away_team' => $this->faker->name(),
            'location' => $this->faker->address(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'results' => $this->faker->randomElement(['home_win', 'away_win', 'draw']),
            'type' => $this->faker->randomElement(['league', 'tournament', 'friendly']),
        ];
    }
}
