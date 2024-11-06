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
        Schema::create('modules', function (Blueprint $table) {
            $table->id();
            $table->string('judul',50);            
            $table->string('link',50);
            $table->string('posisi',50);
            $table->string('tipe',50);
            $table->integer('idtipe');
            $table->string('tampilan_tipe',100);
            $table->enum('tampilkan_judul',['ya', 'tidak'])->default('ya');
            $table->enum('hal',['ya', 'tidak']);
            $table->text('style');
            $table->integer('urutan');
            $table->dateTime('tgl');
            $table->enum('publish',['ya', 'tidak'])->default('ya');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
