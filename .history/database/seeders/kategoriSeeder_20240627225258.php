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
            'color' => 'red'
        ]);

        Kategori::create([
            'nama_kategori' => 'Programming',
            'slug' => 'programming',
            'color' => 'blue'
        ]);

        Kategori::create([
            'nama_kategori' => 'Desain',
            'slug' => 'desain',
            'color' => 'green'
        ]);

        Kategori::create([
            'nama_kategori' => 'Lifestyle',
            'slug' => 'lifestyle',
            'color' => 'yellow'
        ]);

        Kategori::create([
            'nama_kategori' => 'Otomotif',
            'slug' => 'otomotif',
            'color' => 'purple'
        ]);

        Kategori::create([
            'nama_kategori' => 'Kesehatan',
            'slug' => 'kesehatan',
            'color' => 'pink'
        ]);

        Kategori::create([
            'nama_kategori' => 'Pendidikan',
            'slug' => 'pendidikan',
            'color' => 'orange'
        ]);
    }
}
