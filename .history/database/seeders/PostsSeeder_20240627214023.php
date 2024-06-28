<?php

namespace Database\Seeders;

use App\Models\Kategori;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Post::factory(100)
            ->recycle(Kategori::factory()->count(2))
            ->recycle(User::factory(5)->create())
            ->create();
    }
}
