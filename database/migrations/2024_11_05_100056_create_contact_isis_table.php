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
        Schema::create('contact_isis', function (Blueprint $table) {
            $table->id();
            $table->string('id_contact',50);
            $table->string('iduser',50);
            $table->text('isi');
            $table->string('gambar',200);
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
        Schema::dropIfExists('contact_isis');
    }
};
