<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class Halaman_Tipes extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('halaman_tipes')->insert([
            [
                'judul' => 'Home',
                'link' => 'home',
                'tipe' => 'home',
                'kategori' => 'konten',
                'deskripsi' => 'Merupakan halaman utama website. Tampilan halaman utama diatur pada menu tampilan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
               'judul' => 'Tulis',
                'link' => 'tulis',
                'tipe' => 'tulis',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan isi halaman dengan menuliskan secara langsung isi website.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Berita',
                'link' => 'berita',
                'tipe' => 'berita',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan isi halaman dengan mengambil copy dari database berita yang telah tersedia.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Foto',
                'link' => 'galeri',
                'tipe' => 'galeri',
                'kategori' => 'media',
                'deskripsi' => 'Halaman Tipe Galeri berfungsi untuk menampilkan galeri foto.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Kategori Berita',
                'link' => 'kategori',
                'tipe' => 'berita_kategori',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan daftar / list berita sesuai dengan kategori yang telah tersedia.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Kategori Foto',
                'link' => 'album',
                'tipe' => 'galeri_kategori',
                'kategori' => 'media',
                'deskripsi' => 'Menampilkan foto galeri sesuai dengan kategori / album foto yang telah tersedia di kategori galeri.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Kategori Foto',
                'link' => 'album',
                'tipe' => 'galeri_kategori',
                'kategori' => 'media',
                'deskripsi' => 'Menampilkan foto galeri sesuai dengan kategori / album foto yang telah tersedia di kategori galeri.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Halaman',
                'link' => 'halaman',
                'tipe' => 'halaman',
                'kategori' => 'konten',
                'deskripsi' => 'Halaman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Semua Berita',
                'link' => 'semua-berita',
                'tipe' => 'berita',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan seluruh berita dalam satu menu / halaman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Video',
                'link' => 'video',
                'tipe' => 'video',
                'kategori' => 'media',
                'deskripsi' => 'Menampilkan Video Yang Berasal Dari Youtube',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Polling',
                'link' => 'polling',
                'tipe' => 'polling',
                'kategori' => 'interaksi',
                'deskripsi' => 'Menampilkan Jajak Pendapat Sederhana Secara online',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Kontak',
                'link' => 'kontak',
                'tipe' => 'kontak',
                'kategori' => 'interaksi',
                'deskripsi' => 'Menampilkan Data Data Kontak Pelamar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Login',
                'link' => 'login',
                'tipe' => 'login',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan Halaman Login',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Cari',
                'link' => 'cari',
                'tipe' => 'cari',
                'kategori' => 'konten',
                'deskripsi' => 'cari',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Pelamar',
                'link' => 'pelamar',
                'tipe' => 'pelamar',
                'kategori' => 'data',
                'deskripsi' => 'Menampilkan Data Lengkap dan Profil Pelamar',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Perusahaan',
                'link' => 'perusahaan',
                'tipe' => 'perusahaan',
                'kategori' => 'data',
                'deskripsi' => 'Menampilkan Data Lengkap dan Profil Perusahaan',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Album',
                'link' => 'album',
                'tipe' => 'album',
                'kategori' => 'media',
                'deskripsi' => 'Album',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Halaman',
                'link' => 'halaman',
                'tipe' => 'psb_halaman',
                'kategori' => 'konten',
                'deskripsi' => 'Halaman',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Staff',
                'link' => 'staff',
                'tipe' => 'staff',
                'kategori' => 'data',
                'deskripsi' => 'Menampilkan data staff beserta profilnya',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'File Download',
                'link' => 'file',
                'tipe' => 'file',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan File Yang Bisa Didownload oleh pengunjung website',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Link',
                'link' => 'link',
                'tipe' => 'link',
                'kategori' => 'konten',
                'deskripsi' => 'Link',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Konsultasi',
                'link' => 'konsultasi',
                'tipe' => 'konsultasi',
                'kategori' => 'interaksi',
                'deskripsi' => 'Halaman Tipe Konsultasi berfungsi untuk menampilkan Data Konsultasi.',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'judul' => 'Profile',
                'link' => 'profile',
                'tipe' => 'profile',
                'kategori' => 'konten',
                'deskripsi' => 'Menampilkan profil perusahaan yang telah diinputkan.',
                'created_at' => now(),
                'updated_at' => now()
            ],
        ]);
    }
}
