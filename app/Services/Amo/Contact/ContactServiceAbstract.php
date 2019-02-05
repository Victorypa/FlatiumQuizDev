<?php

namespace App\Services\Amo\Contact;

use GuzzleHttp\Client;
use App\Services\Amo\ServiceAbstract;

abstract class ContactServiceAbstract extends ServiceAbstract
{
    protected $data;

    public function __construct(Client $client, $data = [])
    {
        parent::__construct($client);

        $this->data = $data;
    }
}
