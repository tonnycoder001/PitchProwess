<?php

namespace Database\Factories;

use App\Models\Senior;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Senior>
 */
class SeniorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     *
     *
     */
    protected $model = Senior::class;

    public function definition(): array
    {



        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 40),
            'foot' => $this->faker->randomElement(['left', 'right']),
            'jersey_number' => $this->faker->numberBetween(1, 99),
            'nationality' => $this->faker->country,
            'position' => $this->faker->randomElement(['Goalkeeper', 'Defender', 'Midfielder', 'Forward']),
            'image' => $this->faker->imageUrl(640, 480, 'sports', true, 'Faker'), // You can customize this URL as needed
        ];
    }
}
