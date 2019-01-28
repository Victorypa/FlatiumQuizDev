<?php

namespace App\Http\Controllers\Panel;

use App\Card\Card;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PanelController extends Controller
{
    public function index()
    {
        return view('panel.index');
    }
}
