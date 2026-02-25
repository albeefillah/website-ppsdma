<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenPage extends Model
{
     protected $fillable = [
        'judul',
        'slug',
        'deskripsi',
        'hero_image',
        'layout_type',
        'is_active',
    ];

    /* ================= RELATIONS ================= */

    public function categories()
    {
        return $this->hasMany(DokumenCategory::class)
            ->orderBy('urutan');
    }

    public function items()
    {
        return $this->hasMany(DokumenItem::class)
            ->orderBy('urutan');
    }
}
