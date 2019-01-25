<?php

namespace App\Models\Card;

use App\Models\Room\Room;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
