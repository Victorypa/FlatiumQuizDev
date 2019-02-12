<?php

namespace App\Models\Card\Material;

use App\Models\Card\Card;
use Illuminate\Database\Eloquent\Model;

class MaterialCategory extends Model
{
    protected $guarded = [];

    public function card()
    {
        return $this->belongsTo(Card::class);
    }
}
