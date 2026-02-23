<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class widyaIswara extends Model
{
    protected $table = 'widya_iswara';
    protected $fillable = [
        'nama',
        'foto',
        'jabatan'
    ];
}
