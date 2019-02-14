<?php

namespace App\Http\Controllers\Card;

use App;
use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CardController extends Controller
{
    public function index()
    {
        if(!file_exists(public_path('storage'))) {
           App::make('files')->link(storage_path('app/public'), public_path('storage'));
        }
        return view('cards.index');
    }

    public function show(Card $card)
    {
        $with = [
             'squares', 'decorations', 'design_skills',
             'material_categories', 'start_dates'
        ];

        return Card::where('id', $card->id)->with($with)->first();
    }

    public function store(Request $request)
    {
        return Card::create($request->all());
    }
}
