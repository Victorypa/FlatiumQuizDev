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
                'responsible_user_id' => $this->exists('responsible_user_id', $data),
                'custom_fields' => array(
                    array(
                        'id' => 432595,
                        'values' => array(
                            array(
                                 'value' => $this->exists('email', $data),
                                 'enum' => "WORK"
                            ),
                        )
                    ),
                    array(
                        'id' => 432593,
                        'values' => array(
                            array(
                                'value' => $this->exists('phone', $data),
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
