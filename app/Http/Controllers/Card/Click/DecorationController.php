<?php

namespace App\Http\Controllers\Card\Click;

use Illuminate\Http\Request;
use App\Models\Card\Click\Click;
use App\Http\Controllers\Controller;

class DecorationController extends Controller
{
    public function index()
    {    
        return view('panel.clicks.decorations.index', [
            'new' => Click::where('name', 'new')->get()->count(),
            'total_new' => Click::where('name', 'total_new')->get()->count(),
            'old' => Click::where('name', 'old')->get()->count()
        ]);
    }
}
