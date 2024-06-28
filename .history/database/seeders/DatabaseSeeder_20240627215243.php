<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Kategori;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $abang = User::factory()->create([
            'name' => 'Bahriyanto Anang',
            'email' => 'bahriyantoanang@gmail',
            'username' => 'bahriyantoanang',
            'password' => bcrypt('sandi123'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);


        //
        Post::factory(100)
            ->recycle([
                User::factory(5)->create(),
                $abang,
            ])
            ->recycle(Kategori::factory(3)->create())
            ->create();
    }
}
