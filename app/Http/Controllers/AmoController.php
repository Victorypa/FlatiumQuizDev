<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Amo\Contact\ContactCreate;
use App\Services\Amo\Leads\LeadCreate;

class AmoController extends Controller
{
    public function index()
    {
        $data = [
            'name' => 'big',
            'tags' => ['one', 'two'],
            'sale' => 100,
            'custom_fields' => [
                'square' => 1
            ]
        ];

        $pipelineId = 1587214;

        $contact = (new ContactCreate($this->client))->create('ivan', 'elijah@gmail.com', 'phone call');
        dd($contact);
        // (new LeadCreate($this->client, $data, $pipelineId, $contact->id))->create();
    }
}
