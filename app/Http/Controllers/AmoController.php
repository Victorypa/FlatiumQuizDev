<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Amo\Contact\ContactCreate;

class AmoController extends Controller
{
    public function index()
    {
        $contact = (new ContactCreate($this->client, 'ivan', 'elijah@gmail.com', 'phone call'))->create();

        
    }
}
