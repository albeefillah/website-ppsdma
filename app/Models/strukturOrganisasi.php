<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class strukturOrganisasi extends Model
{
    protected $table = 'struktur_organisasi';
    protected $fillable = [
        'foto',
    ];

    public function getOrganisasiUrl(): string
{
    if (!$this->foto) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->foto);
}
}
