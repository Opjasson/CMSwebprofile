<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BeritaCategories extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('berita_categories')->insert([
            [
                'judul' => 'Kegiatan',
                'link' => 'kegiatan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Rapat',
                'link' => 'rapat',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Piknik',
                'link' => 'piknik',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}
