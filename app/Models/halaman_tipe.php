<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class halaman_tipe extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'link',
        'tipe',
        'kategori',
        'folder'
    ];

    public function halCat()
    {
        return $this->belongsTo(halaman_kategori::class,'kategori','tipe');
    }

}
