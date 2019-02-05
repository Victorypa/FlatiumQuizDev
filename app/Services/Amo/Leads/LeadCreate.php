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
                'pipeline_id' => $this->pipelineId,
                'responsible_user_id' => 2211916,
            )
        );
    }
}
