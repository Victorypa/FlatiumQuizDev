<?php

namespace App\Services\Amo\Leads;

use App\Services\Amo\Auth\Auth;
use App\Services\Amo\ServiceAbstract;

class LeadCreate extends ServiceAbstract
{
    public function create(Array $data)
    {
        $leads['add'] = array(
            array(
                'name' => $data['name'],
                'tags' => $this->exists('tags', $data),
                'sale' => $this->exists('sale', $data),
                'pipeline_id' => $this->exists('pipeline_id', $data),
                'contacts_id' => $this->exists('contacts_id', $data),
                'responsible_user_id' => $this->exists('responsible_user_id', $data),
                'tags' => $this->exists('tags', $data),
                'custom_fields' => array_key_exists('custom_fields', $data) ? array(
                    array(
                        'id' => 549969,
                        'values' => array(
                            array(
                                'value' => $this->exists('square', $data['custom_fields'])
                            )
                        )
                    ),
                    array(
                        'id' => 565041,
                        'values' => array(
                            array(
                                'value' => $this->exists('remont_id', $data['custom_fields'])
                            )
                        )
                    ),

                    array(
                        'id' => 585849,
                        'values' => array(
                            array(
                                'value' => $this->exists('roistat_cookie', $data['custom_fields'])
                            )
                        )
                    )
                ) : null
            )
        );

        return $this->request($leads, config('services.amocrm.lead.create_link'));
    }
}
