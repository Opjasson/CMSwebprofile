<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class type_category extends Model
{
    use HasFactory;
    protected $table = "sambutan";

    protected $fillable = [
        'type',
    ];
}
