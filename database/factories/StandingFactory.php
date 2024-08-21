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
            'position' => $this->faker->numberBetween(1, 20),
            'club_name' => $this->faker->company,
            'played' => $this->faker->numberBetween(1, 38),
            'won' => $this->faker->numberBetween(1, 38),
            'drawn' => $this->faker->numberBetween(1, 38),
            'lost' => $this->faker->numberBetween(1, 38),
            'goal_difference' => $this->faker->numberBetween(-100, 100),
            'points' => $this->faker->numberBetween(0, 100)
        ];
    }
}
