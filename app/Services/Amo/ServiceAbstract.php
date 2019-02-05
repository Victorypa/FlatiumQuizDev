<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;

abstract class ServiceAbstract
{
    protected $client;

    protected $data;

    public function __construct(Client $client, ...$data)
    {
        $this->client = new Client([
            'cookies' => true
        ]);

        $this->data = $data;
    }
}
