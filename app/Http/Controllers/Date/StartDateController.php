<?php

namespace App\Http\Controllers\Date;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StartDateController extends Controller
{
    public function index()
    {
        return view('calculate.date.start.index');
    }

    public function store(Request $request)
    {
        Card::where('id', $request->card_id)->first()->start_dates()->create([
            'type' => $request->type
        ]);
    }
}
