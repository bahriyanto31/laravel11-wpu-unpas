<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        Kategori::create([
            'nama_kategori' => 'Teknologi',
            'slug' => 'teknologi',
        ]);

        Kategori::create([
            'nama_kategori' => 'Programming',
            'slug' => 'programming',
        ]);

        Kategori::create([
            'nama_kategori' => 'Desain',
            'slug' => 'desain',
        ]);

        Kategori::create([
            'nama_kategori' => 'Otomotif',
            'slug' => 'otomotif',
        ]);

        Kategori::create([
            'nama_kategori' => 'Kesehatan',
            'slug' => 'kesehatan',
        ]);

        Kategori::create([
            'nama_kategori' => 'Bisnis',
            'slug' => 'bisnis',
        ]);
    }
}
