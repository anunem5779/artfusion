<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auction extends Model
{
    protected $fillable = ['title', 'starting_price', 'current_bid', 'end_time'];

    public function bids()
    {
        return $this->hasMany(Bid::class);  // Assuming you have a Bid model
    }
}
