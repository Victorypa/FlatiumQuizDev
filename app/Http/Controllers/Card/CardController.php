<?php

namespace App\Http\Controllers\Card;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index()
    {
        return view('cards.index');
    }

    public function store(Request $request)
    {
        Card::create($request->all());
    }
}
