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
            'name' => $this->faker->name,
            'home_team' => $this->faker->name,
            'away_team' => $this->faker->name,
            'location' => $this->faker->address,
            'date' => $this->faker->date,
            'time' => $this->faker->time,
            'type' => $this->faker->randomElement(['league', 'tournament', 'friendly']),
            'team' => $this->faker->name,



            'team' => $this->faker->randomElement(['men', 'women', 'academy']),
        ];
    }
}
