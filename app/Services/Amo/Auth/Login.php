<?php

namespace App\Services\Amo\Auth;

use GuzzleHttp\Client;

class Login
{
    public static function login()
    {
        $client = new Client;

        return $client->request('POST', config('services.amocrm.auth.link'), [
            'form_params' => [
                'USER_LOGIN' => config('services.amocrm.auth.email'),
                'USER_HASH' => config('services.amocrm.auth.token'),
            ],
        ]);
    }
}
