<?php

namespace App\Models\Card\Square;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class Square extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
