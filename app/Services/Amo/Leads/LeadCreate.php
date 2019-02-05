<?php

namespace App\Services\Amo\Leads;

use App\Services\Amo\Leads\LeadServiceAbstract;

class LeadCreate extends LeadServiceAbstract
{
    public function create()
    {
        $lead['add'] = array(
            array(
                'name' => $this->data['name'],
                'tags' => $this->data['tags'],
                'sale' => $this->data['sale'],
                'pipeline_id' => $this->pipelineId,
                'responsible_user_id' => 2211916,
                'tags' => $this->data['tags'],
                'custom_fields' => array(
                    array(
                        'id' => 549969,
                        'values' => array(
                            array(
                                'value' => $this->data['custom_fields']['square']
                            )
                        )
                    ),
                    array(
                        'id' => 565041,
                        'values' => array(
                            array(
                                'value' => $this->data['custom_fields']['remont_id']
                            )
                        )
                    )
                )
            )
        );


        dd($lead);

    }
}
