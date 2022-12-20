<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\dog>
 */
class dogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            //'img' => $this->faker->unique()->url,
            'img' => 'https://dog.ceo/api/breeds/image/random/' . $this->faker->unique()->numberBetween(1, 1000),
            'description' => $this->faker->sentence,
        ];
    }
}
