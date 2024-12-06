<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $fillable = [
        'title',
        'description',
        'image_url',
    ];

    protected $casts = [
        'image_url' => 'array', // Automatically handle JSON encoding/decoding
    ];
}
