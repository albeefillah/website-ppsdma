<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'is_active',
        'list',

    ];

    public function getimageUrl(): string
{
    if (!$this->image) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->image);
}
}