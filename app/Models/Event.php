<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    protected $fillable = [
        'title',
        'caption',
        'poster',
        'event_date',
        'event_time',
        'is_active',
    ];

    protected $casts = [
        'event_date' => 'date',
        'event_time' => 'datetime:H:i',
        'is_active' => 'boolean',
    ];

     public function getPosterUrl(): string
{
    if (!$this->poster) {
        return asset('images/placeholder.png');
    }

    return Storage::url('public/' . $this->poster);
}
}
