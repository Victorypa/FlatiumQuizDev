<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;
use App\Models\Person;

class Crud
{
    protected $client;
    protected $person;

    public function __construct(Client $client, Person $person)
    {
        $this->client = new Client([
            'cookies' => true
        ]);

        $this->person = $person;

        $this->login();
    }

    public function create()
    {

        $link = 'https://flatium.amocrm.ru/api/v2/leads';

        $lead['add'] = array(
            array(
                'name' => $this->person->email . '  ' . $this->person->name,
                'tags' => $this->person->card->result,
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

    public function update($lead)
    {

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
