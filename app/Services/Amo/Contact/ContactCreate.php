<?php

namespace App\Services\Amo\Contact;

use App\Services\Amo\ServiceAbstract;

class ContactCreate extends ServiceAbstract
{
    public function create(Array $data)
    {
        $contacts['add'] = array(
            array(
                'name' => $data['name'],
                'responsible_user_id' => $data['responsible_user_id'],
                'custom_fields' => array(
                    array(
                        'id' => 432595,
                        'values' => array(
                            array(
                                 'value' => $data['email'],
                                 'enum' => "WORK"
                            ),
                        )
                    ),
                    array(
                        'id' => 432593,
                        'values' => array(
                            array(
                                'value' => $data['phone'],
                                'enum' => "WORK"
                            )
                        )
                    )
                )
            )
        );

        return $this->request($contacts, config('services.amocrm.contact.create_link'));
    }


}
