<?php

namespace App\Services\Amo;

use GuzzleHttp\Client;

abstract class ServiceAbstract
{
    protected $client;

    protected $data;

    protected $pipelineId;

    public function __construct()
    {

    }
}
