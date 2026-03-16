<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

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

    public function getSejarahUrl(): string
{
    if (!$this->image) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->image);
}
}
