<?php

namespace App\Services\Amo\Leads;

use GuzzleHttp\Client;
use App\Services\Amo\ServiceAbstract;

abstract class LeadServiceAbstract extends ServiceAbstract
{
    protected $data;
    protected $pipelineId;
    protected $contact_id;

    public function __construct(Client $client, $data = [], $pipelineId = 1028320, $contact_id = null)
    {
        parent::__construct($client);
        $this->data = $data;
        $this->pipelineId = $pipelineId;
        $this->contact_id = $contact_id;
    }
}
