<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Address>
 */
class AddressFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'state' => $this->faker->state,
            'city' => $this->faker->city,
            'neighborhood' => $this->faker->word,
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'is_primary' => true,
            'description' => $this->faker->optional()->text,
        ];
    }
}
