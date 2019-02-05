<?php

use App\Services\Amo\ServiceAbstract;

abstract class LeadServiceAbstract extends ServiceAbstract
{
    protected $pipelineId;

    public function __construct($pipelineId)
    {
        parent::__construct();

        $this->pipelineId = $pipelineIdl;
    }

    abstract public function create();
}
