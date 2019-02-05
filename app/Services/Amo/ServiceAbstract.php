<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;

abstract class ServiceAbstract
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }
}
