<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class berita extends Model
{
    protected $table = 'berita';
    protected $fillable = [
        'judul_berita',
        'foto',
        'konten_berita',
    ];

    public function getberitaUrl(): string
{
    if (!$this->foto) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->foto);
}
}
