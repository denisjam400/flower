<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BlogModel>
 */
class BlogModelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'post_name' => $this->faker->title(),
            'post_content' => $this->faker->sentence(700),
            'keyNote' => $this->faker->sentence(90),
        ];
    }
}
