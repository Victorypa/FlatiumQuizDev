<?php

use App\Services\Amo\ServiceAbstract;
use App\Services\Amo\Auth\Login;

abstract class LeadServiceAbstract extends ServiceAbstract
{
    protected $data;

    protected $pipelineId;

    public function __construct(Client $client, $data, $pipelineId)
    {
        parent::__construct($client);

        $this->data = $data;
        $this->pipelineId = $pipelineIdl;

        Login::login();
    }

    abstract public function create();
}
