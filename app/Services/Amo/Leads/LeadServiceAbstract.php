<?php

namespace App\Services\Amo\Leads;

use GuzzleHttp\Client;
use App\Services\Amo\ServiceAbstract;

abstract class LeadServiceAbstract extends ServiceAbstract
{
    protected $data;

    protected $pipelineId;

    public function __construct(Client $client, $data = [], $pipelineId = 1028320)
    {
        parent::__construct($client);

        $this->data = $data;
        $this->pipelineId = $pipelineId;
    }
}
