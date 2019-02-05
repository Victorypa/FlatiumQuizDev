<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Amo\Leads\LeadCreate;

class AmoController extends Controller
{
    public function index()
    {
        $data = [];
        $pipelineId = 1;
        (new LeadCreate($this->client, $data))->create();
    }
}
