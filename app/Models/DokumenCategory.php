<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenCategory extends Model
{
    protected $fillable = [
        'dokumen_page_id',
        'nama',
        'slug',
        'urutan',
    ];

    /* ================= RELATIONS ================= */

    public function page()
    {
        return $this->belongsTo(DokumenPage::class, 'dokumen_page_id');
    }

    public function items()
    {
        return $this->hasMany(DokumenItem::class)
            ->orderBy('urutan');
    }
}
