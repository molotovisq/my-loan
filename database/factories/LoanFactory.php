<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Provider;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Loan>
 */
class LoanFactory extends Factory
{
    public function definition(): array
    {
        $client = Client::inRandomOrder()->first();
        $provider = Provider::inRandomOrder()->first();

        return [
            'provider_id' => $provider->id,
            'client_id' => $client->id,
            'value' => $this->faker->randomFloat(2, 100, 900),
            'due_at' => $this->faker->dateTimeBetween('now', '+1 month'),
            'status' => $this->faker->randomElement(['pending', 'in_progress', 'approved', 'diligence']),
        ];
    }
}
