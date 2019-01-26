<?php

namespace App\Models;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
