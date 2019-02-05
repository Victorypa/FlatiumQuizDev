<?php

namespace App\Services\Amo\Contact;

use GuzzleHttp\Client;
use App\Services\Amo\ServiceAbstract;

abstract class ContactServiceAbstract extends ServiceAbstract
{
    protected $name;
    protected $email;
    protected $phone;
    protected $responsible_user_id;

    public function __construct(Client $client, $name = '', $email = '', $phone = '', $responsible_user_id = 2211916)
    {
        parent::__construct($client);

        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->responsible_user_id = $responsible_user_id;
    }
}
