<?php

namespace App\Http\Controllers\Card;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ACardController extends Controller
{
    public function index()
    {
        return view('cards.a.index');
    }
}
