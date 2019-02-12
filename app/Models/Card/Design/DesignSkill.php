<?php

namespace App\Models\Card\Design;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class DesignSkill extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
