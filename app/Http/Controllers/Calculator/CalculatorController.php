<?php

namespace App\Http\Controllers\Calculator;

use GuzzleHttp\Client;
use App\Services\Amo\Crud;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Calculator\Calculator;

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

    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }

    public function store(Request $request)
    {
        $pipelineId = 1028320;

        $price = $this->mappings[$request->get('style')][$request->get('category')][$request->get('type')];

        $calculator = Calculator::create([
            'square' => $request->get('square'),
            'type' => $request->get('type'),
            'style' => $request->get('style'),
            'category' => $request->get('category'),
            'phone' => $request->get('phone'),
            'name' => $request->get('name'),
            'price' => $price * (int) $request->get('square')
        ]);

        $this->addContact($calculator);
    }



    protected function addContact($calculator)
    {
        $this->login();

        $link = 'https://flatium.amocrm.ru/api/v2/contacts';

        $contacts['add'] = array(
            array(
                'name' => $calculator->name,
                'responsible_user_id' => 2211916,
                'custom_fields' => array(
                    array(
                        'id' => 432593,
                        'values' => array(
                            array(
                                'value' => $calculator->phone,
                                'enum' => "WORK"
                            )
                        )
                    )
                )
            )
        );

        $response = $this->client->request('POST', $link, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($contacts)
        ]);
    }

    protected function login()
    {
        $link= 'https://flatium.amocrm.ru/private/api/auth.php?type=json';

        $this->client->request('POST', $link, [
            'form_params' => [
                'USER_LOGIN' => config('services.amocrm.email'),
                'USER_HASH' => config('services.amocrm.token'),
            ],
        ]);
    }
}
