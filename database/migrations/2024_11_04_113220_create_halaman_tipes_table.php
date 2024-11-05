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
        Schema::create('halaman_tipes', function (Blueprint $table) {
            $table->id();
            $table->string('judul',50);
            $table->string('link',50);
            $table->enum('tipe',['ya', 'tidak']);
            $table->string('kategori',50);
            $table->string('folder',100);
            $table->text('deskripsi');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('halaman_tipes');
    }
};
