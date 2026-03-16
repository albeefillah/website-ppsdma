<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class galeri extends Model
{
    protected $table = 'galeri';
    protected $fillable = [
        'judul_galeri',
        'foto',
    ];
     public function getGaleriUrl(): string
{
    if (!$this->foto) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->foto);
}
}
