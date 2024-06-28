<?php

namespace Database\Factories;

use App\Models\Kategori;
use App\Models\User;
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
        return [
            // post factory
            'title' => $this->faker->sentence(),
            'author_id' => User::factory(),
            'kategori_id' => Kategori::factory(),
            'slug' => Str::slug($this->faker->sentence()),
            'body' => $this->faker->paragraphs(3, true),
            // created_at range from 1 week ago to now
            'created_at' => $this->faker->dateTimeBetween('-1 week', 'now')
        ];
    }
}
