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

        // $pipeline_id = 1587214;

        $contact = (new ContactCreate($this->client))->create($data1);

        $data2 = [
            'name' => 'big',
            'tags' => ['one', 'two'],
            'sale' => 100,
            'pipeline_id' => 1587214,
            'contact_id' => $contact->id,
            'custom_fields' => [
                // 'square' => 1,
                // 'remont_id' => 111
            ]
        ];

        (new LeadCreate($this->client))->create($data2);
    }
}
