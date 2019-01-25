<?php

namespace App\Models\Room;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
