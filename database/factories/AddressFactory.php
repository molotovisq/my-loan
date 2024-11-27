<?php

namespace Database\Factories;

use App\Models\Address;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    private function getCityData(): array
    {
        return [
            'Teresina' => [
                'state' => 'PI',
                'neighborhoods' => [
                    'Dirceu 1', 'Dirceu 2', 'Promorar', 'Areias', 'Satelite', 'Mocambinho', 'Centro'
                ]
            ],
            'Timon' => [
                'state' => 'MA',
                'neighborhoods' => [
                    'Centro', 'Parque Alvorada', 'Boa Vista', 'Mariza', 'Cidade Nova'
                ]
            ]
        ];
    }

    public function definition(): array
    {
        $cityData = $this->getCityData();
        $city = $this->faker->randomElement(array_keys($cityData));
        $state = $cityData[$city]['state'];
        $neighborhood = $this->faker->randomElement($cityData[$city]['neighborhoods']);

        return [
            'state' => $state,
            'city' => $city,
            'neighborhood' => $neighborhood,
            'street' => $this->faker->streetName,
            'number' => $this->faker->buildingNumber,
            'is_primary' => true,
            'description' => $this->faker->optional()->text,
        ];
    }
}
