<?php

namespace App\Models\Card;

use App\Models\Person;
use App\Models\Room\Room;
use App\Models\Card\Square\Square;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected $guarded = [];

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }

    public function people()
    {
        return $this->hasMany(Person::class);
    }

    public function square()
    {
        return $this->hasOne(Square::class);
    }
}
