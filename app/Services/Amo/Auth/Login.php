<?php

namespace App\Services\Amo\Auth;

use GuzzleHttp\Client;

class Login
{
    public static function login()
    {
        $client = new Client;

        return $client->request('POST', config('services.amocrm.link'), [
            'form_params' => [
                'USER_LOGIN' => config('services.amocrm.email'),
                'USER_HASH' => config('services.amocrm.token'),
            ],
        ]);
    }
}
