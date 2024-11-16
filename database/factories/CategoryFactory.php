<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $category = ['Sport', 'Technology', 'Games', 'Music', 'Entertainment'];
        return [
            'name' => fake()->randomElement($category),
            'slug' => Str::slug(fake()->randomElement($category))
        ];
    }
}
