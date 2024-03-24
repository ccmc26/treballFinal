<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_Language>
 */
class User_LanguageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_user' => $this->faker->numberBetween(1, 3),
            'id_language' => $this->faker->numberBetween(1, 5),
            'level' => $this->faker->numberBetween(1, 5)
        ];
    }
}
