<?php

namespace App\Models\Traits;

use App\Services\Amo\Contact\ContactCreate;

trait PersonTrait
{
    protected function pushToAmo($person)
    {
        dump($person);
    }
}
