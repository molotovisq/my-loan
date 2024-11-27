<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Provider>
 */
class ProviderFactory extends Factory
{
    public function definition(): array
    {
        // Array de sufixos para o apelido, com posições mais "ricas"
        $nickSuffixes = [
            'da bet',
            'da polícia',
            'do banco',
            'do cassino',
            'do financiamento',
            'da corretora',
        ];

        $user = User::factory()->create();

        $user->assignRole('provider');

        $firstName = explode(' ', $user->name)[0];

        $nickname = $firstName . ' ' . $this->faker->randomElement($nickSuffixes);

        return [
            'user_id' => $user->id,
            'nickname' => $nickname,
            'credit_limit' => $this->faker->randomFloat(2, 1000, 10000),
        ];
    }
}
