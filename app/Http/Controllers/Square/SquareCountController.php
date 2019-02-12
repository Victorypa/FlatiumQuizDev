<?php

namespace App\Http\Controllers\Square;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SquareCountController extends Controller
{
    public function index()
    {
        return view('calculate.square.count.index');
    }

    public function store(Request $request)
    {
        $square = Card::where('id', $request->card_id)->first()->squares()->create([
            'area' => $request->area
        ]);

        return $square;
    }
}
