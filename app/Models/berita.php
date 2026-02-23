<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul_berita',
        'foto',
        'konten_berita',
    ];
}
