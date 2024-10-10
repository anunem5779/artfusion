<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Picture extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'artist',
    ];

    // Define the relationship with Artist
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }
}
