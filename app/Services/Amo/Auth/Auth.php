<?php

namespace App\Services\Amo\Auth;

use GuzzleHttp\Client;

class Auth
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function login()
    {
         $this->client->request('POST', config('services.amocrm.auth.link'), [
            'form_params' => [
                'USER_LOGIN' => config('services.amocrm.auth.email'),
                'USER_HASH' => config('services.amocrm.auth.token'),
            ],
        ]);
    }
}
