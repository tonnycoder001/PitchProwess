<?php

namespace Database\Factories;

use App\Models\AcademyPlayer;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Senior>
 */
class AcademyPlayerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = AcademyPlayer::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name,
            'age' => $this->faker->numberBetween(18, 40),
            'foot' => $this->faker->randomElement(['left', 'right']),
            'jersey_number' => $this->faker->numberBetween(1, 99),
            'nationality' => $this->faker->country,
            'position' => $this->faker->randomElement(['Goalkeeper', 'Defender', 'Midfielder', 'Forward']),
            'image' => $this->faker->imageUrl(640, 480, 'sports', true, 'Faker'),
        ];
    }
}
