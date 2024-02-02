<?php

namespace Database\Factories;

use App\Models\Sale;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    protected $model = Sale::class;

    public function definition(): array
    {
        return [
            'total_sales' => $this->faker->numberBetween(15000, 60000),
            'customer_id' => $this->faker->numberBetween(1, 10),
        ];
    }
}
