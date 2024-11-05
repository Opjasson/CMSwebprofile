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
        Schema::create('lamarans', function (Blueprint $table) {
            $table->id();
            $table->integer('loker_id');
            $table->string('cv_upload',200);
            $table->string('nama',250);
            $table->string('email',250);
            $table->string('no_Hp',50);
            $table->string('alamat',250);
            $table->text('summary');
            $table->string('gaji_awal',250);
            $table->string('target_gaji',250);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamarans');
    }
};
