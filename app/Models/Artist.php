<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Artist extends Model
{
    // An artist has many pictures
    public function pictures()
    {
        return $this->hasMany(Picture::class);
    }
}
