<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class kotakSaran extends Model
{
    protected $table = 'kotak_saran';
    
    protected $fillable = [
        'jenis_layanan',
        'nama',
        'email',
        'isi_pesan',
    ];
}
