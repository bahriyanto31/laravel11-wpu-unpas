<?php

namespace Database\Factories;

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
        return [
            // post factory
            'title' => $this->faker->sentence(),
            'author' => $this->faker->name(),
            'slug' => $this->faker->sentence()->slug(),
            'body' => $this->faker->paragraphs(3, true),
        ];
    }
}
