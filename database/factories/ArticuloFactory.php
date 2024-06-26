<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Articulo>
 */
class ArticuloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // $opciones = ['bolso', 'top', 'pulsera', 'letra'];
        return [
            'name' => $this->faker->text(),
            // 'stock' => $this->faker->numberBetween(0, 10),
            // 'discount' => $this->faker->numberBetween(0, 1),
            'photo' => $this->faker->imageUrl(),
            'description' => $this->faker->realText(),
            'price' => $this->faker->randomFloat(2, 2, 5),
            'created_at' => now(),
            'updated_at' => now(),
            'created_by' => 1,
            'updated_by' => 1,
        ];

    }
}
