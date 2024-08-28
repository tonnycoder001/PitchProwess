<?php

namespace Database\Factories;

use App\Models\Standing;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Standing>
 */
class StandingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Standing::class;
    public function definition(): array
    {
        return [
            'team_name' => $this->faker->name,
            'games_played' => $this->faker->numberBetween(0, 20),
            'wins' => $this->faker->numberBetween(0, 20),
            'draws' => $this->faker->numberBetween(0, 20),
            'losses' => $this->faker->numberBetween(0, 20),
            'points' => $this->faker->numberBetween(0, 150),
            'goal_difference' => $this->faker->numberBetween(0, 50),

        ];
    }
}
