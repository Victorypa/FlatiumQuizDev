<?php

namespace App\Models\Card;

use App\Models\Person;
use App\Models\Room\Room;
use App\Models\Card\Square\Square;
use Illuminate\Database\Eloquent\Model;
use App\Models\Card\Decoration\Decoration;
use App\Models\Card\Material\MaterialCategory;

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

    public function material_categories()
    {
        return $this->hasMany(MaterialCategory::class);
    }
}
