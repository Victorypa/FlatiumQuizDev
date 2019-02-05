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

    protected function request(Array $data, $link)
    {
        $response = $this->client->request('POST', $link, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($data)
        ]);

        return json_decode($response->getBody())->_embedded->items[0];
    }
}
