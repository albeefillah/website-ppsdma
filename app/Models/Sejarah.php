<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sejarah extends Model
{
    protected $table = 'sejarah';
    protected $fillable = [
        'tahun',
        'judul',
        'image',
        'deskripsi',
        'created_at',
        'updated_at'
    ];
}
