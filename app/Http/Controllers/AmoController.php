<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\Amo\Contact\ContactCreate;

class AmoController extends Controller
{
    public function index()
    {
        $data['add'] = array(
            'some'
        );

        (new ContactCreate($this->client, 'elijah new', 'elijah@gmail.com', 'phone call'))->create();
    }
}
