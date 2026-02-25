<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tugasFungsi extends Model
{
    protected $table = 'tugasFungsi';
    protected $fillable = [
        'tugas',
        'fungsi'
    ];
}
