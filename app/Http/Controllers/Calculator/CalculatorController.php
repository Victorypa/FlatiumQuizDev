<?php

namespace App\Http\Controllers\Calculator;

use GuzzleHttp\Client;
use App\Services\Amo\Crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Calculator\Calculator;

use App\Services\Amo\Leads\LeadCreate;
use App\Services\Amo\Contact\ContactCreate;

class CalculatorController extends Controller
{
    protected $mappings = [
        'LOFT' => [
            'standard' => [
                'new' => 6800,
                'total_new' => 9500,
                'old' => 11300
            ],
            'comfort' => [
                'new' => 7100,
                'total_new' => 9800,
                'old' => 11800
            ],
            'premium' => [
                'new' => 7500,
                'total_new' => 10200,
                'old' => 12200
            ]
        ],

        'SK' => [
            'standard' => [
                'new' => 6510,
                'total_new' => 9030,
                'old' => 10800
            ],
            'comfort' => [
                'new' => 6720,
                'total_new' => 9240,
                'old' => 11000
            ],
            'premium' => [
                'new' => 7140,
                'total_new' => 9660,
                'old' => 11500
            ]
        ],

        'K' => [
            'standard' => [
                'new' => 6700,
                'total_new' => 9300,
                'old' => 11200
            ],
            'comfort' => [
                'new' => 6900,
                'total_new' => 9500,
                'old' => 11400
            ],
            'premium' => [
                'new' => 7300,
                'total_new' => 10000,
                'old' => 11900
            ]
        ]
    ];

    public function store(Request $request)
    {
        $pipelineId = 1028320;

        $price = $this->mappings[$request->get('style')][$request->get('category')][$request->get('type')] * $request->get('square');

        $calculator = Calculator::create([
            'square' => $request->get('square'),
            'type' => $request->get('type'),
            'style' => $request->get('style'),
            'category' => $request->get('category'),
            'phone' => $request->get('phone'),
            'name' => $request->get('name'),
            'price' => $price * (int) $request->get('square')
        ]);

        $contact = (new ContactCreate($this->client))->create([
            'name' => $request->get('name'),
            'phone' => $request->get('phone')
        ]);

        if (!empty($contact)) {
            (new LeadCreate($this->client))->create([
                'name' => $request->get('name'),
                'sale' => $price,
                'tags' => array($request->get('type'), $request->get('style'), $request->get('category')),
                'pipeline_id' => $pipelineId,
                'contacts_id' => $contact->id,
                'responsible_user_id' => 2211916,
                'custom_fields' => array(
                    'square' => $request->get('square')
                )
            ]);
        }
    }
}
