<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            'password' => bcrypt('password'),
            'role' => 'admin',
            'email_verified_at' => now(),
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
