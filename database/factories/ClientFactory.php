<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        // Array de sufixos para o apelido
        $nickSuffixes = [
            'do posto',
            'da borracharia',
            'da padaria',
            'do mercado',
            'do restaurante',
            'da oficina',
            // Adicione outros sufixos conforme necessário
        ];

        // Nome completo gerado aleatoriamente
        $name = fake()->name();

        // Extrair o primeiro nome
        $firstName = explode(' ', $name)[0];

        return [
            'name' => $name,
            'nickname' => $firstName . ' ' . fake()->randomElement($nickSuffixes),
            'description' => fake()->text(),
        ];
    }
}
