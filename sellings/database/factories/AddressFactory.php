<?php

namespace Database\Factories;

use App\Models\Address;
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

    protected $model = Address::class;
    public function definition(): array
    {
        return [
            'address' => $this->faker->address,
            'customer_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
