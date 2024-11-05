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
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
            $table->string('username',50);
            $table->string('judul',200);
            $table->string('subjudul',200);
            $table->string('link',200);
            $table->text('deskripsi');
            $table->text('kata_kunci');
            $table->string('tipe_slideshow',50);
            $table->text('top_left');
            $table->text('top_right');
            $table->string('header',200);
            $table->string('header2',200);
            $table->string('logo',200);
            $table->string('logo_landscape',191);
            $table->string('logo_text',100);
            $table->string('logo_text2',100);
            $table->string('breadcumb',191);
            $table->text('header_kanan');
            $table->text('header_bawah');
            $table->string('banner',200);
            $table->string('footer',200);
            $table->string('footer_title',100);
            $table->text('footer_text');
            $table->string('theme',50);
            $table->string('theme_new',32);
            $table->integer('kolom');
            $table->string('favicon',200);
            $table->string('alamat',200);
            $table->string('kota',50);
            $table->string('provinsi',50);
            $table->text('maps');
            $table->string('kode_post',5);
            $table->string('telepon',50);
            $table->string('telepon2',50);
            $table->string('fax',50);
            $table->string('email',50);
            $table->string('website',50);
            $table->string('facebook',200);
            $table->string('twitter',200);
            $table->string('google_plus',200);
            $table->string('google_map',100);
            $table->text('google_verification');
            $table->text('followup');
            $table->string('instagram',200);
            $table->string('youtube',100);
            $table->string('whatsapp',100);
            $table->string('tiktok',191);
            $table->string('warna_dominan',20);
            $table->string('warna_sekunder',20);
            $table->string('warna_pelengkap',20);
            $table->dateTime('tgl');
            $table->dateTime('tgl_upgrade');
            $table->enum('publish', ['ya', 'tidak'])->default('ya');
            $table->text('note');
            $table->enum('aktif', ['ya', 'tidak']);
            $table->enum('sudahCek', ['ya', 'tidak']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturans');
    }
};
