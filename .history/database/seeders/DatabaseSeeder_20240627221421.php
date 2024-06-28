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


        //
        Post::factory(100)
            ->recycle([
                $abang,
            ])
            ->recycle(Kategori::factory(3)->create())
            ->create();
    }
}
