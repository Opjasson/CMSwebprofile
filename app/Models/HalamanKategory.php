<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HalamanKategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'link',
        'tipe'
    ];

    /**
     * Get all of the comments for the HalamanKategory
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class, 'foreign_key', 'local_key');
    }
}
