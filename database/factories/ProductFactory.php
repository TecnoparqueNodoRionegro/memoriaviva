<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            // 'name' => $this->faker->name(),
            // 'description' => $this->faker->text(),
            // 'price' => $this->faker->numberBetween('10000', '100000'),
            // 'cover_page_url' => $this->faker->imageUrl(1024, 508)
        ];
    }
}
