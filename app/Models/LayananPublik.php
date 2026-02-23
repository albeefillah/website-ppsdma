<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LayananPublik extends Model
{
     protected $fillable = [
        'icon',
        'judul',
        'caption',
        'image',
        'konten',
        'is_active',
    ];
}