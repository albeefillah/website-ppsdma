<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class visiMisi extends Model
{
    protected $table = 'visi_misi';
    protected $fillable = [
        'visi',
        'misi'
    ];
}
