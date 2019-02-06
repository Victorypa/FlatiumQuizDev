<?php

namespace App\Services\Results;

use App\Models\Card\Card;

class FilterResultsByPopularity
{
    public function get()
    {
        $cards = Card::get();
    }
}
