<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class halaman_kategori extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'judul',
        'link',
        'tipe',
    ];

    public function halTipe()
    {
        return $this->hasMany(halaman_tipe::class,'tipe','kategori');
    }

}
