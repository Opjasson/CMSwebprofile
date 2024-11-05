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
        Schema::create('berita_komentars', function (Blueprint $table) {
            $table->id();
            $table->integer('id_halaman');
            $table->integer('id_berita');
            $table->integer('no_komentar');
            $table->string('nama',50);
            $table->string('link',50);
            $table->string('telepon',50);
            $table->string('email',50);
            $table->string('judul',50);
            $table->text('komentar');
            $table->text('admin');
            $table->enum('balas', ['ya', 'tidak']);
            $table->dateTime('tgl');
            $table->enum('publish', ['ya', 'tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berita_komentars');
    }
};
