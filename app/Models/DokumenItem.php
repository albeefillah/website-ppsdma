<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumenItem extends Model
{
    protected $fillable = [
        'dokumen_page_id',
        'dokumen_category_id',
        'judul',
        'cover_image',
        'file_path',
        'tahun',
        'is_active',
        'urutan',
    ];

    /* ================= RELATIONS ================= */

    public function page()
    {
        return $this->belongsTo(DokumenPage::class, 'dokumen_page_id');
    }

    public function category()
    {
        return $this->belongsTo(DokumenCategory::class, 'dokumen_category_id');
    }
}
