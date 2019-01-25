<?php

namespace App\Http\Controllers\Form;

use Exception;
use GuzzleHttp\Client;
use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FormController extends Controller
{
    protected $client;

    protected $token = '927a17dd6d264d99c1970535eda5ebf7';

    protected $email = 'ilya.gavrilov@flatium.ru';

    public function __construct()
    {
        $this->client = new Client([
            'cookies' => true
        ]);
    }

    public function index(Card $card)
    {
        return view('forms.index');
    }

    public function store(Card $card, Request $request)
    {
        $person = $card->people()->create($request->all());

        $this->create($person);
    }

    protected function auth()
    {
        $link= 'https://flatium.amocrm.ru/private/api/auth.php?type=json';

        $this->client->request('POST', $link, [
            'form_params' => [
                'USER_LOGIN' => config('services.amocrm.email'),
                'USER_HASH' => config('services.amocrm.token'),
            ],
        ]);
    }

    protected function create($person)
    {
        $this->auth();

        $link = 'https://flatium.amocrm.ru/api/v2/leads';

        $lead['add'] = array(
            array(
                'name' => $person->email . '  ' . $person->name,
                'pipeline_id' => 1572109
            )
        );

        $response = $this->client->request('POST', $link, [
            'headers' => [
                'Content-Type' => 'application/json'
            ],
            'body' => json_encode($leads)
        ]);
    }
}
