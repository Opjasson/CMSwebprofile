<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Type_Category extends Model
{
    use HasFactory;
    protected $table = "type_categories";


    public $timestamps = true;
    
    protected $fillable = [
        'type',
    ];
}
