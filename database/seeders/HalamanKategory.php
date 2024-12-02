<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HalamanKategory extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halaman_kategoris')->insert([
            [
                'judul' => 'Konten',
                'link' => 'konten',
                'tipe' => 'konten',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Media',
                'link' => 'media',
                'tipe' => 'media',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Interaksi',
                'link' => 'interaksi',
                'tipe' => 'interaksi',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Data',
                'link' => 'data',
                'tipe' => 'data',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
