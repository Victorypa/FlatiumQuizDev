<?php

namespace App\Http\Controllers\Panel;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        $cards = Card::orderBy('created_at', 'desc')->with(['rooms', 'people'])->get();

        return view('panel.index', compact('cards'));
    }
}
