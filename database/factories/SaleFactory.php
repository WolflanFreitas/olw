<?php

namespace Database\Factories;

use App\Enums\Status;
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
    public function definition(): array
    {
        return [
            'seller_id' => \App\Models\Seller::factory(),
            'client_id' => \App\Models\Client::factory(),
            'sold_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'total_amount' => $this->faker->numberBetween(10000, 50000),
            'status' => $this->faker->randomElement(Status::cases()),
        ];
    }
}
