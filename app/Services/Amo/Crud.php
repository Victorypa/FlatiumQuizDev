<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;

class Crud
{
    protected $client;
    protected $lead;

    public function __construct(Client $client, $lead)
    {
        $this->client = new Client([
            'cookies' => true
        ]);
        $this->lead = $lead;
    }

    public function create()
    {
        $this->login();

        $link = 'https://flatium.amocrm.ru/api/v2/leads';

        $lead['add'] = array(
            array(
                'name' => $this->lead->email . '  ' . $this->lead->name,
                'pipeline_id' => 1572109
            )
        );

        $response = $this->client->request('POST', $link, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($lead)
        ]);

        return json_decode($response->getBody());
    }

    protected function login()
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
