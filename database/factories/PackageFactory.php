<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Package>
 */
class PackageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->city() . ' Tour',
            'slug' => fake()->slug(),
            'image_cover' => fake()->imageUrl(420, 315, fake()->city(), true),
            'image' => fake()->imageUrl(1920, 1080, fake()->city(), true),
            'description' => fake()->paragraph()
        ];
    }
}
