<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;
use App\Services\Amo\Auth\Auth;

abstract class ServiceAbstract
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = new Client([
            'cookies' => true
        ]);

        (new Auth($this->client))->login();
    }

    abstract public function create(Array $data);
}
