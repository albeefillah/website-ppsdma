<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Roadmap extends Model
{
    protected $fillable = [
        'image',
        
    ];

    public function getRoadmapsUrl(): string
{
    if (!$this->roadmap) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->roadmap);
}
}
