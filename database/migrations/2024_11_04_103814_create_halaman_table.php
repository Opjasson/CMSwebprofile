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
            $table->string('tampilkan_judul')->default('1');
            $table->string('tampilkan_isi')->default('1');
            $table->string('tampilkan_gambar')->default('1');
            $table->string('tampilkan_tanggal');
            $table->string('tampilkan_komentar');
            $table->string('tampilkan_formulir');
            $table->string('tampilkan_pembaca');
            $table->string('tampilkan_katakunci');
            $table->string('tampilkan_berbagi');
            $table->integer('jumlah_pembaca');
            $table->string('gambar',200);
            $table->integer('urutan');
            $table->integer('up_halaman');
            $table->string('sub_halaman');
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
