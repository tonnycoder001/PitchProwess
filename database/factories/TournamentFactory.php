<?php

namespace Database\Factories;

use App\Models\Tournament;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tournament>
 */
class TournamentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Tournament::class;

    public function definition(): array
    {
        return [
            'tournament_name' => $this->faker->name(),
            'date' => $this->faker->date(),
            'location' => $this->faker->city(),
            'home_team' => $this->faker->name(),
            'away_team' => $this->faker->name(),
            'results' => $this->faker->numberBetween(4, 6),
            'time' => $this->faker->dateTime()

        ];
    }
}
