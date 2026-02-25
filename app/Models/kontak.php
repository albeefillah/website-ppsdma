<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    protected $table = 'kontak';
    protected $fillable = [
        'Link_peta',
        'email',
        'whatsapp',
        'facebook',
        'instagram',
        'no_telp',
    ];
}
