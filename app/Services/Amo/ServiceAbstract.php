<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;
use App\Services\Amo\Auth\Login;

abstract class ServiceAbstract
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = new Client([
            'cookies' => true
        ]);

        Login::login();
    }

    abstract public function create();
}
