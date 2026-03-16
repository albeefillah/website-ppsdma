<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class pelatihan extends Model
{
    protected $table = 'pelatihan';
    protected $fillable = [
        'banner',
        'nama_pelatihan',
        'tanggal_mulai',
        'tanggal_selesai',
        'lokasi',
        'jumlah_peserta',

    ];

    public function getBannerUrl(): string
{
    if (!$this->banner) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->banner);
}
}
