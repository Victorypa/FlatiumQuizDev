<?php

namespace App\Services\Amo\Contact;

use App\Services\Amo\Contact\ContactServiceAbstract;

class ContactCreate extends ContactServiceAbstract
{
    public function create()
    {
        $contacts['add'] = array(
            array(
                'name' => $this->name,
                'responsible_user_id' => $this->responsible_user_id,
                'custom_fields' => array(
                    array(
                        'id' => 432595,
                        'values' => array(
                            array(
                                 'value' => $this->email,
                                 'enum' => "WORK"
                            ),
                        )
                    ),
                    array(
                        'id' => 432593,
                        'values' => array(
                            array(
                                'value' => $this->phone,
                                'enum' => "WORK"
                            )
                        )
                    )
                )
            )
        );

        $response = $this->client->request('POST', config('services.amocrm.contact.create_link'), [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($contacts)
        ]);

        return json_decode($response->getBody())->_embedded->items[0];
    }
}
