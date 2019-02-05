<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Amo\Contact\ContactCreate;
use App\Services\Amo\Leads\LeadCreate;

class AmoController extends Controller
{
    public function index()
    {
        $data1 = [
            'name' => 'ivan',
            'email' => 'test@gmail.com',
            'phone' => 'test',
            'responsible_user_id' => '2211916',
        ];

        $data2 = [
            'name' => 'big',
            'tags' => ['one', 'two'],
            'sale' => 100,
            'custom_fields' => [
                'square' => 1
            ]
        ];

        $pipeline_id = 1587214;

        $contact = (new ContactCreate($this->client))->create($data1);

        // (new LeadCreate($this->client))->create($data, $pipeline_id, $contact->id);
    }
}
