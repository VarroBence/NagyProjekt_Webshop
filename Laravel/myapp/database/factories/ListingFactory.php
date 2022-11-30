<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ListingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(),
            'tags' => 'Black, Latest model, Sport',
            'logo' => null,
            'price' => $this->faker->numberBetween(1000, 10000),
            'description' => $this->faker->paragraph(5),
        ];
    }
}
