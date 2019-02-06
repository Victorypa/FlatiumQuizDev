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

    protected function exists($key, Array $data)
    {
        return array_key_exists($key, $data) ? $data[$key] : null;
    }
}
