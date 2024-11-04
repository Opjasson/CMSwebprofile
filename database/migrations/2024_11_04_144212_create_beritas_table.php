<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('beritas', function (Blueprint $table) {
            $table->id();
            $table->string('judul',200);
            $table->string('link',200);
            $table->longText('isi');
            $table->text('kata_kunci');
            $table->string('kategori',100);
            $table->string('penulis',100);
            $table->integer('id_berita_kategori');
            $table->enum('tampilkan_judul', ['ya', 'tidak'])->default('ya');
            $table->enum('tampilkan_tanggal', ['ya', 'tidak']);
            $table->enum('tampilkan_isi', ['ya', 'tidak'])->default('ya');
            $table->enum('tampilkan_gambar', ['ya', 'tidak'])->default('ya');
            $table->enum('tampilkan_komentar', ['ya', 'tidak']);
            $table->enum('tampilkan_formulir', ['ya', 'tidak']);
            $table->enum('tampilkan_pembaca', ['ya', 'tidak']);
            $table->enum('tampilkan_katakunci', ['ya', 'tidak']);
            $table->enum('tampilkan_berbagi', ['ya', 'tidak']);
            $table->integer('jumlah_pembaca');
            $table->string('gambar', 200);
            $table->dateTime('posting_pada');
            $table->dateTime('tgl');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beritas');
    }
};
