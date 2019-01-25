<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;
use App\Services\AbstractService;

class Auth
{
    protected $client;

    public function __construct(Client $client)
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }

    public function login()
    {
        $link= 'https://flatium.amocrm.ru/private/api/auth.php?type=json';

        $this->client->request('POST', $link, [
            'form_params' => [
                'USER_LOGIN' => config('services.amocrm.email'),
                'USER_HASH' => config('services.amocrm.token'),
            ],
        ]);
    }
}
