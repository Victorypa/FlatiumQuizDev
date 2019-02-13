<?php

namespace App\Http\Controllers\Panel;

use App\Models\Card\Card;
use Illuminate\Http\Request;
use App\Models\Card\Square\Square;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        $with = [
            'rooms', 'people', 'squares',
            'decorations', 'material_categories',
            'start_dates', 'design_skills'
        ];

        return view('panel.index', [
            'cards' => Card::orderBy('created_at', 'desc')->with($with)->get(),
            'squares' => Square::get()
        ]);
    }
}
