<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //

        DB::table('type_categories')->insert([
            [
                'type' => 'konten',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'type' => 'komentar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'type' => 'berita_terbaru',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'type' => 'html',
                'created_at' => now(),
                'updated_at' => now()
            ]

        ])
        ;
    }
}
