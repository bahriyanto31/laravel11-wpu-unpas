<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kategori>
 */
class KategoriFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $kategori = $this->faker->randomElement(['Web Programming', 'Mobile Programming', 'Desktop Programming', 'Network Programming', 'Database Programming']);
        return [
            'nama_kategori' => $kategori,
            'slug' => Str::slug($kategori),
        ];
    }
}
