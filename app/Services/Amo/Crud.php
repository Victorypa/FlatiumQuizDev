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
    }

    public function create()
    {
        $this->login();

        $link = 'https://flatium.amocrm.ru/api/v2/contacts';

        $contacts['add'] = array(
            array(
                'name' => $this->person->name,
                'responsible_user_id' => 2211916,
                'custom_fields' => array(
                    array(
                        'id' => 432595,
                        'values' => array(
                            array(
                                 'value' => $this->person->email,
                                 'enum' => "WORK"
                            ),
                        )
                    ),
                    array(
                        'id' => 432593,
                        'values' => array(
                            array(
                                'value' => $this->person->phone,
                                'enum' => "WORK"
                            )
                        )
                    )
                )
            )
        );

        $response = $this->client->request('POST', $link, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($contacts)
        ]);

        $this->createLead(json_decode($response->getBody())->_embedded->items[0]->id);
    }

    protected function createLead($contact_id)
    {
        $link = 'https://flatium.amocrm.ru/api/v2/leads';

        $lead['add'] = array(
            array(
                'name' => $this->person->name,
                'tags' => $this->person->card->result,
                'pipeline_id' => 1028320,
                'contacts_id' => $contact_id,
                'responsible_user_id' => 2211916,
            )
        );

        $response = $this->client->request('POST', $link, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($lead)
        ]);
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
