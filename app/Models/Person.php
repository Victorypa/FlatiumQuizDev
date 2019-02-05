<?php

namespace App\Models;

use App\Models\Card\Card;
use App\Models\Traits\PersonTrait;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use PersonTrait;

    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::created(function ($person) {
            $person->pushToAmo($person);
        });
    }

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
