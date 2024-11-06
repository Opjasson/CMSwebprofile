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
        Schema::create('module_tipes', function (Blueprint $table) {
            $table->id();
            $table->string('judul',50);
            $table->string('link',50);
            $table->string('tipe',50);
            $table->text('deskripsi');
            $table->string('posisi',50);
            $table->string('folder',100);
            $table->string('tampilan_tipe',100);
            $table->string('ralasi_tabel',50);
            $table->enum('relasi',['2', '1', '0']);
            $table->string('kolom',50);
            $table->string('jenis_file',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_tipes');
    }
};
