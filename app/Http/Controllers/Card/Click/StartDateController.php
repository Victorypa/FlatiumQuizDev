<?php

namespace App\Http\Controllers\Card\Click;

use Illuminate\Http\Request;
use App\Models\Card\Click\Click;
use App\Http\Controllers\Controller;

class StartDateController extends Controller
{
    public function index()
    {
        return view('panel.clicks.start_dates.index', [
            'one' => Click::where('name', 'one')->get()->count(),
            'two' => Click::where('name', 'two')->get()->count(),
            'three' => Click::where('name', 'three')->get()->count(),
            'four' => Click::where('name', 'four')->get()->count()
        ]);
    }
}
