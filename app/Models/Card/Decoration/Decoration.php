<?php

namespace App\Models\Card\Decoration;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class Decoration extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
