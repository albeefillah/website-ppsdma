<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;


class sarana extends Model
{
   protected $table = 'sarana';

    protected $fillable = [
        'sarana',
        'cover_image_id',
    ];

    public function images()
    {
        return $this->hasMany(SaranaImagesItems::class, 'sarana_id');
    }

    public function cover()
    {
    return $this->hasOne(SaranaImagesItems::class, 'sarana_id')
        ->where('is_cover', true);
    }

    
    
    
}
