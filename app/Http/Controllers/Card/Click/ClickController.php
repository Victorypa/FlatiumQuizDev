<?php

namespace App\Http\Controllers\Card\Click;

use Illuminate\Http\Request;
use App\Models\Card\Click\Click;
use App\Http\Controllers\Controller;

class ClickController extends Controller
{
    public function index()
    {
        $clicks = Click::get();
        return view('panel.clicks.index', compact('clicks'));
    }

    public function store(Request $request)
    {
        return Click::create($request->all());
    }
}
