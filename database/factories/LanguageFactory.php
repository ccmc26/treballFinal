<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class LanguageFactory extends Factory
{
    public function definition(): array
    {
        return [
            //buscar com millorar el primer
            'name' => $this->faker->randomElement(['Arabe', 'Espaniol', 'Catalan', 'Gallego', 'Euskera', 'Bable', 'Occita', 'Portugues', 'Italiano', 'Rumano', 'Frances', 'Ingles', 'Napolitano', 'Aleman', 'Japones', 'Coreano', 'Cantones', 'Ruso']),
            'N_max' => $this->faker->numberBetween(5, 30),
            'dificultad' => $this->faker->randomElement(['facil', 'media', 'dificil'])
        ];
    }
}
