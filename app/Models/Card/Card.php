<?php

namespace App\Models\Card;

use App\Models\Person;
use App\Models\Room\Room;
use App\Models\Card\Square\Square;
use App\Models\Decoration\Decoration;
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

    public function squares()
    {
        return $this->hasMany(Square::class);
    }

    public function decorations()
    {
        return $this->hasMany(Decoration::class);
    }
}
