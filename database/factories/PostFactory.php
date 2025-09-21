<?php

namespace Database\Factories;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        $slug = fake()->sentence();
        return [
            'title' => fake()->sentence(),
            'author' => fake()->name(),
            'slug' => Str::slug($slug),
            'body' => fake()->text()
        ];
    }
}
