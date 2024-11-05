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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->integer('id_module');
            $table->string('judul',50);
            $table->string('link',50);
            $table->string('url',200);
            $table->enum('target', ['_parent', '_blank']);
            $table->string('gambar', 200);
            $table->dateTime('tgl');
            $table->enum('publish',['ya', 'tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
