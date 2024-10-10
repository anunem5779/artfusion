<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artwork extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image', 'artist_id'];

    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}