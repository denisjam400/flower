<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProductModel>
 */
class ProductModelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     *randomDigitNotNull
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ProductName' => $this->faker->name(),
            'ProductPrice' => $this->faker->numberBetween(500, 5000),
            'SKU' => $this->faker->numberBetween(25, 250),
            'FirstDesc' => $this->faker->sentence(25),
            'ProductDesc' => $this->faker->sentence(85),
            'ProductDiscount' => $this->faker->numberBetween(5, 50),
        ];
    }
}
