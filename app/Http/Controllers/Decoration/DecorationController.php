<?php

namespace App\Http\Controllers\Decoration;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DecorationController extends Controller
{
    public function index()
    {
        return view('calculate.decoration.index');
    }

    public function store(Request $request)
    {
        Card::where('id', $request->card_id)->first()->decorations()->create([
            'type' => $request->type
        ]);
    }
}
