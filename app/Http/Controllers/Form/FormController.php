<?php

namespace App\Http\Controllers\Form;

use GuzzleHttp\Client;
use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Services\Amo\{ Auth, CreateLead };

class FormController extends Controller
{
    protected $client;

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

        (new CreateLead($this->client, $person))->create();
    }
}
