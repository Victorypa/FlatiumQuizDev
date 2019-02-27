<?php

namespace App\Models\Price;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $guarded = [];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($price) {
            $price->material_price = ($price->price - 1000);
        });
    }
}
