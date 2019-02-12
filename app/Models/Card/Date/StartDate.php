<?php

namespace App\Models\Card\Date;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class StartDate extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
