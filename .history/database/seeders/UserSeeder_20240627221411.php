<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Bahriyanto Anang',
            'email' => 'bahriyantoanang@gmail',
            'username' => 'bahriyantoanang',
            'password' => bcrypt('sandi123'),
            'is_admin' => true,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ]);

        User::factory(5)->create();
    }
}
