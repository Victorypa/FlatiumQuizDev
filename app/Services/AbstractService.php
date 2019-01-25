<?php

namespace App\Services;

use GuzzleHttp\Client;

abstract class AbstractService
{
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }
}
