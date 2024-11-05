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
        Schema::create('halaman', function (Blueprint $table) {
            $table->id();
            $table->string('judul',200);
            $table->string('link',200);
            $table->string('tipe',100);
            $table->integer('Idtipe');
            $table->longText('isi');
            $table->text('kata_kunci');
            $table->enum('tampilkan_judul', ['ya', 'tidak'])->default('ya');
            $table->enum('tampilkan_isi', ['ya', 'tidak'])->default('ya');
            $table->enum('tampilkan_gambar', ['ya', 'tidak'])->default('ya');
            $table->enum('tampilkan_tanggal', ['ya', 'tidak']);
            $table->enum('tampilkan_komentar', ['ya', 'tidak']);
            $table->enum('tampilkan_formulir', ['ya', 'tidak']);
            $table->enum('tampilkan_pembaca', ['ya', 'tidak']);
            $table->enum('tampilkan_katakunci', ['ya', 'tidak']);
            $table->enum('tampilkan_berbagi', ['ya', 'tidak']);
            $table->integer('jumlah_pembaca');
            $table->string('gambar',200);
            $table->integer('urutan');
            $table->integer('up_halaman');
            $table->enum('sub_halaman', ['ya','tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halaman');
    }
};
