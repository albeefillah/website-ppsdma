<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class SaranaImagesItems extends Model
{
    protected $table = 'sarana_images_items';

    protected $fillable = [
        'sarana_id',
        'image_path',
        'is_cover',
    ];

    public function sarana()
    {
        return $this->belongsTo(Sarana::class, 'sarana_id');
    }
   
    

   
}
