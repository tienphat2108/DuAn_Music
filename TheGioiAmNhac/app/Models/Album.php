<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Album extends Model
{
    protected $fillable = ['name', 'artist_id', 'image_path'];

    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }
}
