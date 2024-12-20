<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Client>
 */
class ClientFactory extends Factory
{
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
            'do desmanche',
        ];

        $user = User::factory()->create();

        $user->assignRole('client');

        $address = Address::factory()->create();

        $firstName = explode(' ', $user->name)[0];

        $nickname = $firstName . ' ' . $this->faker->randomElement($nickSuffixes);

        return [
            'user_id' => $user->id,
            'address_id' => $address->id,
            'nickname' => $nickname,
            'description' => $this->faker->text(),
        ];
    }
}
