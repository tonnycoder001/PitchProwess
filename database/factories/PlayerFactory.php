<?php

namespace Database\Factories;

use App\Models\Player;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Player>
 */
class PlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Player::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'age' => $this->faker->numberBetween(18, 40),
            'foot' => $this->faker->randomElement(['Left', 'Right']),
            'jersey_number' => $this->faker->unique()->numberBetween(1, 99),
            'nationality' => $this->faker->country(),
            'position' => $this->faker->randomElement(['Goalkeeper', 'Defender', 'Midfielder', 'Forward']),
            'image' => $this->faker->imageUrl(640, 480, 'sports', true, 'Faker'), // You can customize this URL as needed
            'category' => $this->faker->randomElement(['men', 'women', 'academy']),
        ];
    }
}
