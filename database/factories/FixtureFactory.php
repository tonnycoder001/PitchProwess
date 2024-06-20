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
            'home_team' => $this->faker->name(),
            'away_team' => $this->faker->name(),
            'date' => $this->faker->date(),
            'time' => $this->faker->time(),
            'location' => $this->faker->address(),
            'result' => $this->faker->numberBetween(2, 5)
        ];
    }
}
