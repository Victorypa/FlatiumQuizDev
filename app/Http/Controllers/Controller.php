<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $client;

    public function __construct(Client $client)
    {
        $jar = new \GuzzleHttp\Cookie\CookieJar;

        $this->client = new Client([
            'cookies' => $jar
        ]);
    }
}
